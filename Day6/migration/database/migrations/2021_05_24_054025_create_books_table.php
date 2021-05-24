<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); 
            $table->string('title');
            $table->unsignedBigInteger('author_id')->index();
            $table->unsignedBigInteger('publisher_id')->index();
            $table->unsignedBigInteger('category_id')->index();
            $table->unsignedBigInteger('sub_category_id')->index();
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('publisher_id')->references('id')->on('publishers');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
