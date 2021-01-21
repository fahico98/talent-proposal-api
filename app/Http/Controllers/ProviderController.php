<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Models\Provider;
use App\Models\Feature;
use App\Models\Review;

class ProviderController extends Controller{

   /**
    * Create a new ProviderController instance.
    *
    * @return void
    */
   public function __construct(){
      $this->middleware("auth:api");
   }

   /**
    * Display a listing of the providers ordered or not.
    *
    * @return \Illuminate\Http\Response
    */
   public function index($page, $column = null, $value = null){

      $providers = null;

      if(is_null($column) || is_null($value)){

         $providers = Provider::orderBy("created_at", "desc")
            ->offset(Provider::PER_PAGE * ($page - 1))
            ->limit(Provider::PER_PAGE)
            ->get();

      }else if(($column == "country" || $column == "city" || $column == "name") && !is_null($value)){
         $providers = Provider::filteredByString($page, $column, $value)->get();

      }else{
         if(!is_null($value)){
            $inequality = ($column == "min_general_score") ? ">=" : "<=";
            $providers = Provider::filteredByFloat($page, $value, $inequality)->get();
         }
      }

      return response()->json($providers);
   }

   /**
    * Checks if email exists.
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function emailExists($email){
      return $email == "" ? response()->json(false) : response()->json(Provider::where("email", $email)->exists());
   }

   /**
    * Create a new provider with the request data.
    *
    * @return \Illuminate\Http\Response
    */
   public function create(){

      $selectedFeatures = request()->input("selectedFeatures");
      $providerData = request()->input("form");
      $validated = $this->validator($providerData);

      if($validated->fails()) {
         return response()->json(["errors" => $validated->errors(), "status" => 422]);
      }else{

         $provider = Provider::create($providerData);

         foreach($selectedFeatures as $feature){
            DB::table("feature_provider")->insert(
               ["feature_id" => $feature["id"], "provider_id" => $provider["id"]]
            );
         }

         return response()->json($provider);
      }
   }

   /**
    * Return an specific provider.
    *
    * @param Provider $provider
    * @return \Illuminate\Http\Response
    */
   public function show(Provider $provider){
      $provider->load("features.scores", "reviews.user");
      return response()->json($provider);
   }

   /**
    * Perform a provider qualification.
    *
    * @return \Illuminate\Http\Response
    */
   public function qualify(){

      $provider_id = request()->input("provider_id");
      $user_id = Auth::user()->id;
      $features = request()->input("features");
      $provider = Provider::find($provider_id);
      $scores_matrix = array();
      $sum = 0;

      foreach($features as $index => $feature){
         $sum += $feature["score"];
         $scores_matrix[$index] = array("feature_id" => $feature["id"], "data" => $feature["score"]);
      }

      $review = new Review;
      $review->user_id = $user_id;
      $review->provider_id = $provider_id;
      $review->general_score = $sum/count($features);
      $review->save();
      $review->fresh();

      $provider->increment("review_count");
      $this->refreshGeneralScore($provider);

      foreach($scores_matrix as $index => $element){
         $scores_matrix[$index]["review_id"] = $review["id"];
      }

      DB::table("scores")->insert($scores_matrix);
      return response()->json(["status" => 200]);
   }

   /**
    * Refresh the general score of one single provider.
    *
    * @param  Provider $provider
    */
   protected function refreshGeneralScore(Provider $provider){

      $provider->load("reviews");
      $sum = 0;

      foreach($provider->reviews as $review){
         $sum += $review->general_score;
      }

      $provider->general_score = $sum/$provider->review_count;
      $provider->save();
   }

   /**
    * Get a validator for an incoming registration request.
    *
    * @param  array  $data
    * @return \Illuminate\Contracts\Validation\Validator
    */
   protected function validator(array $data){
      return Validator::make($data, [
         "name" => ["required", "string", "max:80"],
         "country" => ["required", "string", "max:50"],
         "city" => ["required", "string", "max:100"],
         "address" => ["required", "string", "max:80"],
         "phone_number" => ["required", "numeric", "min:1e3", "max:1e19"],
         "email" => ["required", "email", "max:35", "unique:providers"],
         "description" => ["string", "nullable", "max:1000"]
      ]);
   }
}
