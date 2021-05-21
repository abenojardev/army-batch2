<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song', function (Blueprint $table) {
            $table->id();
            $table->string('title'); 

            // relationed column
            $table->unsignedBigInteger('album_id')->index();
            $table->unsignedBigInteger('genre_id')->index();
            $table->unsignedBigInteger('artist_id')->index();
            $table->timestamps();
             
            $table->foreign('album_id')->references('id')->on('album');
            $table->foreign('genre_id')->references('id')->on('genre');
            $table->foreign('artist_id')->references('id')->on('artist');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('song');
    }
}
