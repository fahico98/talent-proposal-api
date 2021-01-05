<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model{

   /**
    * The provider that belong to the review.
    */
   public function provider(){
      return $this->belongsTo(Provider::class);
   }

   /**
    * The user that belong to the review.
    */
   public function user(){
      return $this->belongsTo(User::class);
   }

   /**
    * Get the scores for the review.
    */
   public function scores(){
      return $this->hasMany(Score::class);
   }
}
