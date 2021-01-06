<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model{

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
    * Scope a query to return  only include popular users.
    *
    * @param  \Illuminate\Database\Eloquent\Builder  $query
    * @param  Integer $page
    * @param  String $name
    *
    * @return \Illuminate\Database\Eloquent\Builder
    */
   public function scopeFilteredByColumn($query, $page, $column, $value){
      return Post::where($column, "like", "%$value%")
         ->orderBy($column, "desc")
         ->offset(self::PER_PAGE * ($page - 1))
         ->limit(self::PER_PAGE);
   }
}
