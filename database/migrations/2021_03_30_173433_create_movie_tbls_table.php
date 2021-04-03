<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_tbls', function (Blueprint $table) {
            $table->id();
            $table->string('movie_id');
            $table->string('movie_name');
            $table->string('movie_year');
            $table->string('movie_summery');
            $table->string('movie_genres');
            $table->string('movie_image_path');
            $table->string('insert_user_id');
            $table->string('insert_user_name');
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_tbls');
    }
}
