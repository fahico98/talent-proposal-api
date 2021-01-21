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
         [
            "name" => "Novacolor SAS",
            "country" => "Colombia",
            "city" => "Bogotá D.C.",
            "address" => "Cra 91 # 102 A - 39",
            "phone_number" => "5551234",
            "email" => "contacto.bogota@novacolor.com",
            "description" => "Empresa de suministro de materias primas para el sector Industrial y Cosmético",
            "general_score" => 1.55,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ],
         [
            "name" => "Coffee export & CIA",
            "country" => "Colombia",
            "city" => "Neiva, Huila",
            "address" => "Av. Cll 32 # 17 - 05",
            "phone_number" => "3411129",
            "email" => "ceycia@gmail.com",
            "description" => "Su principal negocio es la molienda y exportación de granos de café verde a nivel mundial.",
            "general_score" => 2.91,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ],
         [
            "name" => "Oceantex SAS",
            "country" => "Colombia",
            "city" => "Savaneta, Antioquia",
            "address" => "Cll 45 # 33 - 09",
            "phone_number" => "1219902",
            "email" => "informacion@oceantex.com",
            "description" => "Empresa dedicada al acabado de productos textiles.",
            "general_score" => 3.47,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ],
         [
            "name" => "Jean Mon SAS",
            "country" => "Colombia",
            "city" => "Cartagena de Indias, Bolivar",
            "address" => "Cra 99 # 14 - 95",
            "phone_number" => "8785655",
            "email" => "info.jeanmon@outlook.com",
            "description" => "Empresa dedicada al comercio al por mayor de productos alimenticios.",
            "general_score" => 2.78,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ],
         [
         "name" => "Aceroscol SAS",
            "country" => "Colombia",
            "city" => "Cali, Balle del Cauca",
            "address" => "Av. Cra 67 # 33 - 01",
            "phone_number" => "3047651",
            "email" => "contacto@aceroscol.co",
            "description" => "Empresa dedicada a la importación, comercialización, transformación y distribución de aceros especiales y otros elementos metalúrgicos para los sectores industrial, petrolero, agrícola, cementero, minero, de la construcción, comercial y talleres especializados.",
            "general_score" => 4.32,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ],
         [
            "name" => "Marquillas y Accesorios SA",
            "country" => "Colombia",
            "city" => "Itagüi, Antioquia",
            "address" => "Cra 23 # 5 - 29",
            "phone_number" => "3228911",
            "email" => "contactor.mya.sa@hotmail.com",
            "description" => "Distribución, comercialización y fabricación de productos publicitarios, tales como, ballas publicitarias, bolantes, calcomanías, etiquetas, entre otros.",
            "general_score" => 3.01,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ],
         [
            "name" => "Premezclas SA",
            "country" => "Colombia",
            "city" => "Yumbo, Balle del Cauca",
            "address" => "Cll 14 # 10 - 21",
            "phone_number" => "3098891",
            "email" => "atencion.al.client@premezclas.co",
            "description" => "Fabricación y prestación de servicios de maquila, co-manufactura y/o escalonamiento productivo de alimentos y bebidas en polvo.",
            "general_score" => 3.00,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ],
         [
            "name" => "Manufacturas Atlantic SAS",
            "country" => "Colombia",
            "city" => "Bogotá D.C.",
            "address" => "Cll 101 # 80 - 32",
            "phone_number" => "5551255",
            "email" => "atlantic.info@atlantic.com",
            "description" => "Empresa dedicada a la confeccion de prendas de vestir excepto prendas de piel.",
            "general_score" => 4.21,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ],
         [
            "name" => "Comercial Fox SAS",
            "country" => "Colombia",
            "city" => "Bogotá D.C.",
            "address" => "Cll 23 # 78 - 13",
            "phone_number" => "3098981",
            "email" => "contacto.comercial.fox@gmail.com",
            "description" => "Empresa dedicada a la comercialización y distribución de productos químicos y materias primas en Colombia.",
            "general_score" => 5.00,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ],
         [
            "name" => "Geofuturo",
            "country" => "Colombia",
            "city" => "Cartagena de Indias, Bolivar",
            "address" => "Av. Cll 121 # 33 B - 44",
            "phone_number" => "8785445",
            "email" => "informacion.geofuturo@outlook.com",
            "description" => "Empresa dedicada a la planeación y ejecución de estrategias vanguardistas que garantizan la gestión legal y adecuada de residuos.",
            "general_score" => 4.33,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ]
      ]);

      DB::table("feature_provider")->insert([

         ["feature_id" => 1, "provider_id" => 1],
         ["feature_id" => 3, "provider_id" => 1],
         ["feature_id" => 4, "provider_id" => 1],

         ["feature_id" => 1, "provider_id" => 2],
         ["feature_id" => 5, "provider_id" => 2],

         ["feature_id" => 2, "provider_id" => 3],
         ["feature_id" => 3, "provider_id" => 3],
         ["feature_id" => 4, "provider_id" => 3],

         ["feature_id" => 1, "provider_id" => 4],
         ["feature_id" => 2, "provider_id" => 4],

         ["feature_id" => 1, "provider_id" => 5],
         ["feature_id" => 2, "provider_id" => 5],
         ["feature_id" => 3, "provider_id" => 5],
         ["feature_id" => 4, "provider_id" => 5],

         ["feature_id" => 4, "provider_id" => 6],

         ["feature_id" => 1, "provider_id" => 7],
         ["feature_id" => 2, "provider_id" => 7],
         ["feature_id" => 3, "provider_id" => 7],
         ["feature_id" => 4, "provider_id" => 7],
         ["feature_id" => 5, "provider_id" => 7],

         ["feature_id" => 1, "provider_id" => 8],
         ["feature_id" => 4, "provider_id" => 8],

         ["feature_id" => 1, "provider_id" => 9],
         ["feature_id" => 2, "provider_id" => 9],
         ["feature_id" => 3, "provider_id" => 9],
         ["feature_id" => 4, "provider_id" => 9],
         ["feature_id" => 5, "provider_id" => 9],

         ["feature_id" => 1, "provider_id" => 10],
         ["feature_id" => 4, "provider_id" => 10],
         ["feature_id" => 5, "provider_id" => 10]
      ]);
   }
}
