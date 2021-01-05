<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model{

   /**
    * The feature that belong to the score.
    */
   public function feature(){
      return $this->belongsTo(Feature::class);
   }

   /**
    * The review that belong to the score.
    */
   public function review(){
      return $this->belongsTo(Review::class);
   }
}
