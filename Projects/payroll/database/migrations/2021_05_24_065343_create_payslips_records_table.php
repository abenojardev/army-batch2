<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayslipsRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payslips_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id')->index();  
            $table->unsignedBigInteger('payslip_id')->index();
            $table->longText('data');
            $table->timestamps();

            $table->foreign('payslip_id')->references('id')->on('payslips');
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
        Schema::dropIfExists('payslips_records');
    }
}
