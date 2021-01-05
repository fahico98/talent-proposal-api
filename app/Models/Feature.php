<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model{

   /**
    * The providers that belong to the feature.
    */
   public function providers(){
      return $this->belongsToMany(Provider::class);
   }

   /**
    * Get the scores for the feature.
    */
   public function scores(){
      return $this->hasMany(Score::class);
   }
}
