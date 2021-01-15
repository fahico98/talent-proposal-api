<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Models\User;

class RegisterController extends Controller{

   /*
   |--------------------------------------------------------------------------
   | Register Controller
   |--------------------------------------------------------------------------
   |
   | This controller handles the registration of new users as well as their
   | validation and creation. By default this controller uses a trait to
   | provide this functionality without requiring any additional code.
   |
   */

   use RegistersUsers;

   /**
    * Where to redirect users after registration.
    *
    * @var string
    */
   // protected $redirectTo = RouteServiceProvider::HOME;

   /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct(){
      $this->middleware("guest");
   }

   /**
    * Get a validator for an incoming registration request.
    *
    * @param  array  $data
    * @return \Illuminate\Contracts\Validation\Validator
    */
   protected function validator(array $data){
      return Validator::make($data, [
         "firstname" => ["required", "string", "max:35"],
         "lastname" => ["required", "string", "max:35"],
         "gender" => ["required", "string", "max:35"],
         "birthday" => ["required", "date", "before:today"],
         "email" => ["required", "string", "email", "max:35", "unique:users"],
         "username" => ["required", "string", "max:25", "min:6", "unique:users"],
         "password" => ["required", "string", "min:8", "max:35", "confirmed"]
      ]);
   }

   /**
    * Create a new user instance after a valid registration.
    *
    * @return User
    */
   protected function create(){

      $requestData = request()->all();
      $validated = $this->validator($requestData);

      if($validated->fails()) {
         return response()->json(["errors" => $validated->errors(), "status" => 422]);
      }else{

         $requestData["password"] = Hash::make($requestData["password"]);
         $user = User::create($requestData);

         $credentials = request(["username", "password"]);
         $token = auth()->attempt($credentials);

         return $this->respondWithToken($token);
      }
   }

   /**
    * Get the token array structure.
    *
    * @param  string $token
    *
    * @return \Illuminate\Http\JsonResponse
    */
   protected function respondWithToken($token){
      return response()->json(["token" => $token]);
   }
}
