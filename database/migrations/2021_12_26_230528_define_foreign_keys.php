<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DefineForeignKeys extends Migration{

   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up(){

      Schema::table('users', function(Blueprint $table){
         $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
      });

      Schema::table("profile_pictures", function(Blueprint $table){
         $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
      });

      Schema::table("feature_provider", function(Blueprint $table){
         $table->foreign("feature_id")->references("id")->on("features")->onDelete("cascade");
         $table->foreign("provider_id")->references("id")->on("providers")->onDelete("cascade");
      });

      Schema::table("scores", function(Blueprint $table){
         $table->foreign("feature_id")->references("id")->on("features")->onDelete("cascade");
         $table->foreign("review_id")->references("id")->on("reviews")->onDelete("cascade");
         $table->foreign("provider_id")->references("id")->on("providers")->onDelete("cascade");
      });

      Schema::table("reviews", function(Blueprint $table){
         $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
         $table->foreign("provider_id")->references("id")->on("providers")->onDelete("cascade");
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down(){

      Schema::table('users', function(Blueprint $table){
         $table->dropForeign("users_role_id_foreign");
      });

      Schema::table("profile_pictures", function(Blueprint $table){
         $table->dropForeign("profile_pictures_user_id_foreign");
      });

      Schema::table("feature_provider", function(Blueprint $table){
         $table->dropForeign("feature_provider_feature_id_foreign");
         $table->dropForeign("feature_provider_provider_id_foreign");
      });

      Schema::table("scores", function(Blueprint $table){
         $table->dropForeign("scores_feature_id_foreign");
         $table->dropForeign("scores_review_id_foreign");
         //$table->dropForeign("scores_provider_id_foreign");
      });

      Schema::table("reviews", function(Blueprint $table){
         $table->dropForeign("reviews_user_id_foreign");
         $table->dropForeign("reviews_provider_id_foreign");
      });
   }
}
