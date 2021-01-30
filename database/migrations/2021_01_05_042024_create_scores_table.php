<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration{

   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up(){
      Schema::create("scores", function (Blueprint $table) {
         $table->bigIncrements("id");
         $table->float("data", 3, 2)->nullable();
         $table->bigInteger("feature_id")->unsigned();
         $table->bigInteger("review_id")->unsigned();
         $table->bigInteger("provider_id")->unsigned();
         $table->softDeletes();
         $table->timestamps();
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down(){
      Schema::dropIfExists("scores");
   }
}
