<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOverarchingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overarching', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('decibel');
            $table->integer('NH3');
            $table->integer('NO2');
            $table->integer('Alcohol');
            $table->integer('Benzene');
            $table->integer('Smoke');
            $table->integer('CO2');
            $table->decimal('humidity');
            $table->decimal('temperature');
            $table->decimal('timeSpentMs')->default('0');
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
        Schema::dropIfExists('overarching');
    }
}
