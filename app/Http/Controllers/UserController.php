<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller{

   /**
    * Display a listing of all Users.s
    *
    */
   public function index(){
      return response()->json(User::all());
   }

   /**
    * Checks if username exists.
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function usernameExists($username){
      return $username == "" ? response()->json(false) : response()->json(User::where("username", $username)->exists());
   }

   /**
    * Checks if email exists.
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function emailExists($email){
      return $email == "" ? response()->json(false) : response()->json(User::where("email", $email)->exists());
   }
}
