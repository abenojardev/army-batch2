<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimekeepingRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timekeeping_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id')->index(); 
            $table->time('clockin');
            $table->time('clockout');
            $table->longText('total');
            $table->unsignedBigInteger('timekeeping_id')->index();
            $table->timestamps();

            $table->foreign('timekeeping_id')->references('id')->on('timekeeping');
            $table->foreign('employee_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timekeeping_records');
    }
}
