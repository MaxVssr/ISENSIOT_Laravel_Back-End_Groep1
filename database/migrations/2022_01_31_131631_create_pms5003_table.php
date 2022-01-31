<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePms5003Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pms5003', function (Blueprint $table) {
            $table->id();
            $table->integer('pm1');
            $table->integer('pm25');
            $table->integer('pm10');
            $table->decimal('timeSpentMs')->default('0');
            $table->date('timestampDate')->nullable();
            $table->time('timestampTime')->nullable();
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
        Schema::dropIfExists('pms5003');
    }
}
