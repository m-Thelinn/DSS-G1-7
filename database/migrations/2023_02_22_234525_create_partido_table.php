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
        Schema::create('partido', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->date('fecha');
            $table->timestamp('hora');
            $table->integer('formato')->comment('1 = b01, 2 = b03, 3=b05');
            $table->integer('resultado')->comment('0 = proximamente, 1 = ganaE1, 2 = ganaE2, 3 = empate');
            $table->integer('equipo1')->index('equipo1');
            $table->integer('equipo2')->index('equipo2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partido');
    }
};
