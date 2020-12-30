<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilePicture extends Model{

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
      "user_id",
      "url",
      "size"
   ];

   /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
   protected $hidden = [
      "id",
      "user_id",
      "deleted_at",
      "created_at",
      "updated_at"
   ];

   public function user(){
      return $this->belongsTo(User::class);
   }
}
