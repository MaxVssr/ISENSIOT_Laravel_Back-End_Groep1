<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHumtempTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humtemp', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('humidity');
            $table->foreign('humidity')->references('humidity')->on('overarching');
            $table->decimal('temperature');
            $table->foreign('temperature')->references('temperature')->on('overarching');
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
        Schema::table('humtemp', function (Blueprint $table) {
            $table->dropForeign('humtemp_humidity_foreign');
            $table->dropForeign('humtemp_temperature_foreign');
            $table->dropForeign('humtemp_timeSpentMs_foreign');

        });
        Schema::dropIfExists('humtemp');
    }
}
