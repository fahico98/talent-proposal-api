<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Provider;

class ProviderController extends Controller{

   /**
    * Create a new AuthController instance.
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
}
