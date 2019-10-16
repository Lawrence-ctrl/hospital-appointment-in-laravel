<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patient_name');
            $table->string('patient_email');
            $table->string('appointment_phone');
            $table->integer('patient_age');
            $table->bigInteger('appointment_depart')->unsigned();
            $table->bigInteger('appointment_doctor')->unsigned();
            $table->bigInteger('appointment_day')->unsigned();
            $table->date('adate');
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
        Schema::dropIfExists('appointments');
    }
}
