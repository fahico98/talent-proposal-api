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

      if(is_null($column) || is_null($value)){

         $providers = Provider::orderBy("created_at", "desc")
            ->offset(Provider::PER_PAGE * ($page - 1))
            ->limit(Provider::PER_PAGE)
            ->get();

      }else{
         $providers = Provider::filteredByColumn($page, $column, $value)->get();
      }

      return response()->json($providers);
   }
}
