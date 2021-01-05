<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model{

   /**
    * The features that belong to the provider.
    */
   public function features(){
      return $this->belongsToMany(Feature::class);
   }

   /**
    * Get the reviews for the provider.
    */
   public function reviews(){
      return $this->hasMany(Review::class);
   }
}
