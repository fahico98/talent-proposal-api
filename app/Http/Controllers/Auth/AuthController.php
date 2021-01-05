<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller{

   /**
    * Create a new AuthController instance.
    *
    * @return void
    */
   public function __construct(){
      $this->middleware('auth:api', ['except' => ['login']]);
   }

   /**
    * Get a JWT via given credentials.
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function login(){

      $credentials = request(['username', 'password']);
      $token = auth()->attempt($credentials);

      if(!$token){
         return response()->json(['error' => 'Unauthorized', 'status' => 401]);
      }

      return $this->respondWithToken($token);
   }

   /**
    * Get the authenticated User.
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function me(){
      $user = Auth::user();
      return response()->json($user);
   }

   /**
    * Log the user out (Invalidate the token).
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function logout(){
      auth()->logout();
      return response()->json(['message' => 'Successfully logged out'], 200);
   }

   /**
    * Refresh a token.
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function refresh(){
      return $this->respondWithToken(auth()->refresh());
   }

   /**
    * Get the token array structure.
    *
    * @param  string $token
    *
    * @return \Illuminate\Http\JsonResponse
    */
   protected function respondWithToken($token){
      return response()->json(['token' => $token]);
   }
}
