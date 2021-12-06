<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMq135Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mq135', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('NH3');
            $table->foreign('NH3')->references('NH3')->on('overarching');
            $table->integer('NO2');
            $table->foreign('NO2')->references('NO2')->on('overarching');
            $table->integer('Alcohol');
            $table->foreign('Alcohol')->references('Alcohol')->on('overarching');
            $table->integer('Benzene');
            $table->foreign('Benzene')->references('Benzene')->on('overarching');
            $table->integer('Smoke');
            $table->foreign('Smoke')->references('Smoke')->on('overarching');
            $table->integer('CO2');
            $table->foreign('CO2')->references('CO2')->on('overarching');
            $table->decimal('timeSpentMs')->default('0');
            $table->foreign('timeSpentMs')->references('timeSpentMs')->on('overarching');
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
        Schema::table('mq135', function (Blueprint $table) {
            $table->dropForeign('mq135_NH3_foreign');
            $table->dropForeign('mq135_NO2_foreign');
            $table->dropForeign('mq135_Alcohol_foreign');
            $table->dropForeign('mq135_Benzene_foreign');
            $table->dropForeign('mq135_Smoke_foreign');
            $table->dropForeign('mq135_CO2_foreign');
            $table->dropForeign('mq135_timeSpentMs_foreign');

        });
        Schema::dropIfExists('mq135');
    }
}
