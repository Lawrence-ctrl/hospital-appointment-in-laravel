<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('history_patient_name');
            $table->string('history_patient_email');
            $table->string('history_appointment_phone');
            $table->integer('history_patient_age');
            $table->bigInteger('history_appointment_depart')->unsigned();
            $table->bigInteger('history_appointment_doctor')->unsigned();
            $table->bigInteger('history_appointment_day')->unsigned();
            $table->date('history_adate');
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
        Schema::dropIfExists('histories');
    }
}
