<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model{

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
      "name",
      "country",
      "city",
      "address",
      "phone_number",
      "email",
      "description",
      "review_count",
      "general_score"
   ];

   /**
    * Providers returned per page.
    *
    */
   const PER_PAGE = 5;

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

   /**
    * Get the scores for the provider.
    */
   public function scores(){
      return $this->hasMany(Score::class);
   }

   /**
    * Scope a query to return a providers set filtered by certain column with certain value.
    *
    * @param  \Illuminate\Database\Eloquent\Builder  $query
    * @param  Integer $page
    * @param  String  $column
    * @param  String  $value
    *
    * @return \Illuminate\Database\Eloquent\Builder
    */
   public function scopeFilteredByString($query, $page, $column, $value){
      return self::where($column, "like", "%$value%")
         ->orderBy("created_at", "desc")
         ->offset(self::PER_PAGE * ($page - 1))
         ->limit(self::PER_PAGE);
   }

   /**
    * Scope a query to return a providers set filtered by a minimum or maximum general score value.
    *
    * @param  \Illuminate\Database\Eloquent\Builder  $query
    * @param  Integer $page
    * @param  Float   $value
    * @param  String  $inequality
    *
    * @return \Illuminate\Database\Eloquent\Builder
    */
   public function scopeFilteredByFloat($query, $page, $value, $inequality){
      return self::where("general_score", $inequality, $value)
         ->orderBy("general_score", ($inequality == "<") ? "desc" : "asc")
         ->offset(self::PER_PAGE * ($page - 1))
         ->limit(self::PER_PAGE);
   }
}
