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
            $table->id();
            $table->integer('humidity');
            $table->integer('temperature');
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
        Schema::dropIfExists('humtemp');
    }
}
