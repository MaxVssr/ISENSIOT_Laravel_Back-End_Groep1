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
            $table->id();
            $table->decimal('decibel');
            $table->foreign('decibel')->references('decibel')->on('microphone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('overarching', function (Blueprint $table) {
            $table->dropForeign('overarching_decibel_foreign');
        });
        Schema::dropIfExists('overarching');
    }
}
