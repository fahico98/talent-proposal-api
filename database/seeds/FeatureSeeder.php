<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FeatureSeeder extends Seeder{

   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run(){

      DB::table("features")->insert([
         [
            "name" => "Atención al cliente",
            "description" => "Trato con el que la empresa acoje a sus clientes, cordialidad, atención y conocimientos de los asesores comerciales.",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ],
         [
            "name" => "Inventario",
            "description" => "Cuan variado y completo es el inventario de productos de la empresa, si presenta o no alternativas de compra.",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ],
         [
            "name" => "Plataformas de servicio",
            "description" => "Variedad que ofrece la empresa en cuanto a formas de atender a sus clientes para satisfacer sus necesidades, por ejemplo, si cuenta o no con servicio a domicilio.",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ],
         [
            "name" => "Asistencia post-venta",
            "description" => "Servicios y asistencia que ofrece la empresa despues de adquiridos sus productos o servicios.",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ],
         [
            "name" => "Relación costo-veneficio",
            "description" => "Si la empresa ofrece los precios justos para cada uno de sus productos o servicio teniendo en cuenta la oferta del mercado actual.",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
         ]
      ]);
   }
}
