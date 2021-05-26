<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->id();
            $table->string('dog_tag_number');
            $table->integer('registration_number');
            $table->string('name');
            $table->string('kennel');
            $table->string('breeder')->nullable();
            $table->string('owner');
            $table->string('color');
            $table->string('breed');
            $table->integer('sire')->nullable();
            $table->integer('dam')->nullable();
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
        Schema::dropIfExists('dogs');
    }
}
