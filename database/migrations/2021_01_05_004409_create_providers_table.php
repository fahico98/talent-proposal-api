<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration{

   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up(){
      Schema::create("providers", function (Blueprint $table){
         $table->bigIncrements("id");
         $table->string("name");
         $table->string("country");
         $table->string("city");
         $table->string("address")->nullable();
         $table->string("phone_number")->nullable();
         $table->string("email")->unique()->nullable();
         $table->text("description")->nullable();
         $table->integer("review_count")->default(0);
         $table->float("general_score", 3, 2)->nullable();
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
      Schema::dropIfExists("providers");
   }
}
