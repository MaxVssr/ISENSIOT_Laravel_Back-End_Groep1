<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMicrophoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('microphone', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('decibel');
            $table->foreign('decibel')->references('decibel')->on('overarching');
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
        Schema::table('microphone', function (Blueprint $table) {
            $table->dropForeign('microphone_decibel_foreign');
            $table->dropForeign('microphone_timeSpentMs_foreign');
        });
        Schema::dropIfExists('microphone');
    }
}
