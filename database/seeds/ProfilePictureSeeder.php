<?php

use Illuminate\Database\Seeder;

class ProfilePictureSeeder extends Seeder{

   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run(){

      DB::table("profile_pictures")->insert([
         "user_id" => null,
         "url" => "public/avatars/defaultUserPhoto.jpg",
         "size" => 5529
      ]);
   }
}
