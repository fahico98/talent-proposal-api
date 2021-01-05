<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up(){
      Schema::create("reviews", function (Blueprint $table) {
         $table->bigIncrements("id");
         $table->float("general_score", 3, 2)->nullable();
         $table->bigInteger("user_id");
         $table->bigInteger("provider_id");
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
      Schema::dropIfExists("reviews");
   }
}
