<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->enum('category',[
                'Top 10 in the Philippines today',
                'Trending Now',
                'Western Movies',
                'Suspenseful Movies',
                'Comedies',
                'Sci-Fi Thrillers',
                'Only on Netflix' 
            ]);
            $table->string('title');
            $table->longText('banner');
            $table->longText('video');
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
        Schema::dropIfExists('videos');
    }
}
