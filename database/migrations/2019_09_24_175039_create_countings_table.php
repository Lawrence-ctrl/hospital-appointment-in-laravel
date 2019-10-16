<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('count_doctor_id')->insigned();
            $table->bigInteger('count_day_id')->unsigned();
            $table->date('count_date');
            $table->integer('count_hits')->nulllable()->default('0');
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
        Schema::dropIfExists('countings');
    }
}
