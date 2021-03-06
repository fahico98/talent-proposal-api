<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeatureProviderTable extends Migration{

   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up(){
      Schema::create("feature_provider", function(Blueprint $table){
         $table->bigIncrements("id");
         $table->bigInteger("feature_id")->unsigned();
         $table->bigInteger("provider_id")->unsigned();
         $table->timestamps();
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down(){
      Schema::dropIfExists("feature_provider");
   }
}
