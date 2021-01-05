<?php

namespace App\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements JWTSubject{

   use Notifiable;

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
      "profile_picture_id",
      "role_id",
      "username",
      "firstname",
      "lastname",
      "birthday",
      "gender",
      "email",
      "password"
   ];

   /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
   protected $hidden = [
      "role_id",
      "password",
      "remember_token",
      "email_verified_at",
      "deleted_at",
      "created_at",
      "updated_at"
   ];

   /**
    * The relationships that should always be loaded.
    *
    * @var array
    */
    protected $with = ["role", "profile_picture"];

   /**
    * The attributes that should be cast to native types.
    *
    * @var array
    */
   protected $casts = [
      'email_verified_at' => 'datetime',
   ];

   /**
    * Get the route key for the model.
    *
    * @return string
    */
   public function getRouteKeyName(){
      return 'username';
   }

   /**
    * Get the identifier that will be stored in the subject claim of the JWT.
    *
    * @return mixed
    */
   public function getJWTIdentifier(){
      return $this->getKey();
   }

   /**
    * Return a key value array, containing any custom claims to be added to the JWT.
    *
    * @return array
    */
   public function getJWTCustomClaims(){
      return [];
   }

   public function role(){
      return $this->belongsTo(Role::class);
   }

   public function profile_picture(){
      return $this->hasOne(ProfilePicture::class);
   }
}
