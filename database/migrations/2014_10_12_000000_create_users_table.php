<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration{

   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up(){
      Schema::create('users', function (Blueprint $table) {
         $table->bigIncrements("id");
         $table->string("username");
         $table->string("firstname");
         $table->string("lastname");
         $table->string("gender")->nullable();
         $table->date("birthday")->nullable();
         $table->string("email")->unique();
         $table->string("password", 255);
         $table->bigInteger("role_id")->unsigned()->default(1);
         $table->integer("review_count")->default(0);
         $table->timestamp("email_verified_at")->nullable();
         $table->rememberToken();
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
      Schema::dropIfExists('users');
   }
}
