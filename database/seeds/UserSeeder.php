<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
         "gender" => "masculino",
         "email" => "fahico98@gmail.com",
         "password" => Hash::make("mecatronica1992"),
         "role_id" => 3,
         "created_at" => Carbon::now(),
         "updated_at" => Carbon::now()
      ]);

      DB::table('users')->insert([
         "username" => "facarcamoca",
         "firstname" => "Fahibran",
         "lastname" => "Carcamo",
         "gender" => "masculino",
         "email" => "facarcamoca@unal.edu.co",
         "password" => Hash::make("mecatronica1992"),
         "role_id" => 2,
         "created_at" => Carbon::now(),
         "updated_at" => Carbon::now()
      ]);

      DB::table('users')->insert([
         "username" => "jjcardozo155",
         "firstname" => "Jose",
         "lastname" => "Cardozo",
         "gender" => "masculino",
         "email" => "jjcardozo155@hotmail.com",
         "password" => Hash::make("legado2019"),
         "created_at" => Carbon::now(),
         "updated_at" => Carbon::now()
      ]);

      DB::table('users')->insert([
         "username" => "dani_medra",
         "firstname" => "Daniel",
         "lastname" => "Medrano",
         "gender" => "masculino",
         "email" => "dani_medra_123@outlook.com",
         "password" => Hash::make("legado2019"),
         "created_at" => Carbon::now(),
         "updated_at" => Carbon::now()
      ]);

      DB::table('users')->insert([
         "username" => "karkox09",
         "firstname" => "Carlos",
         "lastname" => "Gutierrez",
         "gender" => "masculino",
         "email" => "cagutierrez09@gmail.com",
         "password" => Hash::make("legado2019"),
         "created_at" => Carbon::now(),
         "updated_at" => Carbon::now()
      ]);

      DB::table('users')->insert([
         "username" => "avejita2019",
         "firstname" => "Ingrid",
         "lastname" => "Sarate",
         "gender" => "femenino",
         "email" => "avejita2019@hotmail.com",
         "password" => Hash::make("legado2019"),
         "created_at" => Carbon::now(),
         "updated_at" => Carbon::now()
      ]);

      DB::table('users')->insert([
         "username" => "danicorzo1996",
         "firstname" => "Daniela",
         "lastname" => "Corzo",
         "gender" => "femenino",
         "email" => "danicorzo1996@gmail.com",
         "password" => Hash::make("legado2019"),
         "created_at" => Carbon::now(),
         "updated_at" => Carbon::now()
      ]);
   }
}
