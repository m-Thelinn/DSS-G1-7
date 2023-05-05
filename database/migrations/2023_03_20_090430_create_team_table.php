<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teamstats', function (Blueprint $table) {
            $table->id();
            $table->integer('wins');
            $table->integer('losses');
            $table->integer('ranking_position');
            $table->integer('win_rate');
            $table->integer('lose_rate');
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
        Schema::dropIfExists('teamstats');
    }
};
