<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePollenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pollen', function (Blueprint $table) {
            $table->id();
            $table->integer('grass_pollen_count')->nullable();
            $table->integer('tree_pollen_count')->nullable();
            $table->integer('weed_pollen_count')->nullable();
            $table->string('grass_pollen_risk')->default("Low");
            $table->string('tree_pollen_risk')->default("Low");
            $table->string('weed_pollen_risk')->default("Low");
            $table->date('timestampDate')->nullable();
            $table->time('timestampTime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pollen');
    }
}
