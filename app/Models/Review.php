<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Review extends Model{

   /**
    * Reviews returned per page.
    *
    */
   const PER_PAGE = 10;

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
    * Scope a query to return all reviews of one single user with its provider using pagination.
    *
    * @param  \Illuminate\Database\Eloquent\Builder  $query
    * @param  Integer $page
    * @param  Integer $user_id
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

   /**
    * Scope a query to return all reviews of one single provider with its user using pagination.
    *
    * @param  \Illuminate\Database\Eloquent\Builder  $query
    * @param  Integer $page
    * @param  Integer $provider_id
    *
    * @return \Illuminate\Database\Eloquent\Builder
    */
   public function scopeProviderReviews($query, $page, $provider_id){
      return self::where("provider_id", $provider_id)
         ->with("user")
         ->orderBy("created_at", "desc")
         ->offset(self::PER_PAGE * ($page - 1))
         ->limit(self::PER_PAGE);
   }
}
