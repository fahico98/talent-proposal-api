<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Review extends Model{

   /**
    * Reviews returned per page.
    *
    */
   const PER_PAGE = 5;

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

   /**
    * Scope a query to return a providers set filtered by certain column with certain value.
    *
    * @param  \Illuminate\Database\Eloquent\Builder  $query
    * @param  Integer $page
    *
    * @return \Illuminate\Database\Eloquent\Builder
    */
   public function scopeUserReviews($query, $page, $user_id){
      return self::where("user_id", $user_id)
         ->with("provider")
         ->orderBy("created_at", "desc")
         ->offset(self::PER_PAGE * ($page - 1))
         ->limit(self::PER_PAGE);
   }
}
