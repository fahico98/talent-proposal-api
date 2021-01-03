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
         $table->string("username", 15);
         $table->string("firstname", 35);
         $table->string("lastname", 35);
         $table->string("gender")->nullable();
         $table->date("birthday")->nullable();
         $table->string("email", 35)->unique();
         $table->string('biography', 120)->nullable();
         $table->string("password", 255);
         $table->bigInteger("profile_picture_id")->unsigned()->default(1);
         $table->bigInteger("role_id")->unsigned()->default(1);
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
