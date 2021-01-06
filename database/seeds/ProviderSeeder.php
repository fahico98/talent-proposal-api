<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProviderSeeder extends Seeder{

   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run(){

      DB::table("providers")->insert([
         "name" => "Novacolor SAS",
         "country" => "Colombia",
         "city" => "Bogotá D.C.",
         "address" => "Cra 91 # 102 A - 39",
         "phone_number" => "5551234",
         "email" => "contacto.bogota@novacolor.com",
         "created_at" => Carbon::now(),
         "updated_at" => Carbon::now()
      ]);

      DB::table("providers")->insert([
         "name" => "Coffee export & CIA",
         "country" => "Colombia",
         "city" => "Neiva, Huila",
         "address" => "Av. Cll 32 # 17 - 05",
         "phone_number" => "3411129",
         "email" => "ceycia@gmail.com",
         "created_at" => Carbon::now(),
         "updated_at" => Carbon::now()
      ]);

      DB::table("providers")->insert([
         "name" => "Oceantex SAS",
         "country" => "Colombia",
         "city" => "Savaneta, Antioquia",
         "address" => "Cll 45 # 33 - 09",
         "phone_number" => "1219902",
         "email" => "informacion@oceantex.com",
         "created_at" => Carbon::now(),
         "updated_at" => Carbon::now()
      ]);

      DB::table("providers")->insert([
         "name" => "Jean Mon SAS",
         "country" => "Colombia",
         "city" => "Cartagena de Indias, Bolivar",
         "address" => "Cra 99 # 14 - 95",
         "phone_number" => "8785655",
         "email" => "info.jeanmon@outlook.com",
         "created_at" => Carbon::now(),
         "updated_at" => Carbon::now()
      ]);

      DB::table("providers")->insert([
         "name" => "Aceroscol SAS",
         "country" => "Colombia",
         "city" => "Cali, Balle del Cauca",
         "address" => "Av. Cra 67 # 33 - 01",
         "phone_number" => "3047651",
         "email" => "contacto@aceroscol.co",
         "created_at" => Carbon::now(),
         "updated_at" => Carbon::now()
      ]);

      DB::table("providers")->insert([
         "name" => "Marquillas y Accesorios SA",
         "country" => "Colombia",
         "city" => "Itagüi, Antioquia",
         "address" => "Cra 23 # 5 - 29",
         "phone_number" => "3228911",
         "email" => "contactor.mya.sa@hotmail.com",
         "created_at" => Carbon::now(),
         "updated_at" => Carbon::now()
      ]);

      DB::table("providers")->insert([
         "name" => "Premezclas SA",
         "country" => "Colombia",
         "city" => "Yumbo, Balle del Cauca",
         "address" => "Cll 14 # 10 - 21",
         "phone_number" => "3098891",
         "email" => "atencion.al.client@premezclas.co",
         "created_at" => Carbon::now(),
         "updated_at" => Carbon::now()
      ]);

      DB::table("providers")->insert([
         "name" => "Manufacturas Atlantic SAS",
         "country" => "Colombia",
         "city" => "Bogotá D.C.",
         "address" => "Cll 101 # 80 - 32",
         "phone_number" => "5551255",
         "email" => "atlantic.info@atlantic.com",
         "created_at" => Carbon::now(),
         "updated_at" => Carbon::now()
      ]);

      DB::table("providers")->insert([
         "name" => "Comercial Fox SAS",
         "country" => "Colombia",
         "city" => "Bogotá D.C.",
         "address" => "Cll 23 # 78 - 13",
         "phone_number" => "3098981",
         "email" => "contacto.comercial.fox@gmail.com",
         "created_at" => Carbon::now(),
         "updated_at" => Carbon::now()
      ]);

      DB::table("providers")->insert([
         "name" => "Geofuturo",
         "country" => "Colombia",
         "city" => "Cartagena de Indias, Bolivar",
         "address" => "Av. Cll 121 # 33 B - 44",
         "phone_number" => "8785445",
         "email" => "informacion.geofuturo@outlook.com",
         "created_at" => Carbon::now(),
         "updated_at" => Carbon::now()
      ]);
   }
}
