<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(["prefix" => "auth", "namespace" => "Auth"], function(){

   Route::post("login", "AuthController@login")->name("login");
   Route::post("logout", "AuthController@logout");

   Route::get("me", "AuthController@me");

   Route::post("create", "RegisterController@create");
});

Route::group(["prefix" => "user"], function(){
   Route::get("username_exists/{username}", "UserController@usernameExists");
   Route::get("email_exists/{email}", "UserController@emailExists");
});

Route::group(["prefix" => "provider"], function(){
   Route::get("/{page}/{column?}/{value?}", "ProviderController@index");
   Route::get("email_exists/{email}", "ProviderController@emailExists");
});

Route::group(["prefix" => "feature"], function(){
   Route::get("/", "FeatureController@index");
});
