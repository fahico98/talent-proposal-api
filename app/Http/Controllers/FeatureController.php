<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Feature;

class FeatureController extends Controller{

   /**
    * Create a new FeatureController instance.
    *
    * @return void
    */
   public function __construct(){
      $this->middleware("auth:api");
   }

   /**
    * Return a list with every single feature.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(){
      $features = Feature::all();
      return response()->json($features);
   }

   /**
    * Get a validator for an incoming registration request.
    *
    * @param  array  $data
    * @return \Illuminate\Contracts\Validation\Validator
    */
   protected function validator(array $data){
      return Validator::make($data, [
         "name" => ["required", "string", "max:255"],
         "description" => ["required", "string", "max:1000"]
      ]);
   }

   /**
    * Create a new feature with the request data.
    *
    * @return \Illuminate\Http\Response
    */
   public function create(){

      $requestData = request()->all();
      $validated = $this->validator($requestData);

      if($validated->fails()) {
         return response()->json(["errors" => $validated->errors(), "status" => 422]);
      }else{
         $feature = Feature::create($requestData);
         return response()->json($feature);
      }
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
      //
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
      //
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      //
   }
}
