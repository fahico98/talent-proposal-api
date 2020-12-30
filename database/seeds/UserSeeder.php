<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder{

   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run(){

      DB::table('users')->insert([
         "username" => "fahico98",
         "firstname" => "Fahico",
         "lastname" => "Carcamo",
         "country" => "Colombia",
         "city" => "Bogota",
         "phone_number" => "3223986014",
         "email" => "fahico98@gmail.com",
         "password" => Hash::make("mecatronica1992"),
         "role_id" => 3
      ]);

      DB::table('users')->insert([
         "username" => "facarcamoca",
         "firstname" => "Fahibran",
         "lastname" => "Carcamo",
         "country" => "Colombia",
         "city" => "Bogota",
         "phone_number" => "3221210081",
         "email" => "facarcamoca@unal.edu.co",
         "password" => Hash::make("mecatronica1992"),
         "role_id" => 2
      ]);

      DB::table('users')->insert([
         "username" => "jjcardozo155",
         "firstname" => "Jose",
         "lastname" => "Cardozo",
         "country" => "Colombia",
         "city" => "Liberty city",
         "phone_number" => "3219998880",
         "email" => "jjcardozo155@hotmail.com",
         "password" => Hash::make("legado2019")
      ]);

      DB::table('users')->insert([
         "username" => "dani_medra",
         "firstname" => "Daniel",
         "lastname" => "Medrano",
         "country" => "United states",
         "city" => "vice city",
         "phone_number" => "3120912991",
         "email" => "dani_medra_123@outlook.com",
         "password" => Hash::make("legado2019")
      ]);

      DB::table('users')->insert([
         "username" => "karkox09",
         "firstname" => "Carlos",
         "lastname" => "Gutierrez",
         "country" => "Brazil",
         "city" => "Los santos",
         "phone_number" => "3113434343",
         "email" => "cagutierrez09@gmail.com",
         "password" => Hash::make("legado2019")
      ]);

      DB::table('users')->insert([
         "username" => "avejita2019",
         "firstname" => "Ingrid",
         "lastname" => "Sarate",
         "country" => "Brazil",
         "city" => "Los santos",
         "phone_number" => "3133344551",
         "email" => "avejita2019@hotmail.com",
         "password" => Hash::make("legado2019")
      ]);

      DB::table('users')->insert([
         "username" => "danicorzo1996",
         "firstname" => "Daniela",
         "lastname" => "Corzo",
         "country" => "Colombia",
         "city" => "San andreas",
         "phone_number" => "3220011343",
         "email" => "danicorzo1996@gmail.com",
         "password" => Hash::make("legado2019")
      ]);
   }
}
