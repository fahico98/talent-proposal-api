<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder{

   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run(){

      DB::table("roles")->insert([
         "name" => "general"
      ]);

      DB::table("roles")->insert([
         "name" => "moderator"
      ]);

      DB::table("roles")->insert([
         "name" => "administrator"
      ]);
   }
}
