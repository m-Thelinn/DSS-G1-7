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
            $table->string('id_partido', 15)->primary();
            $table->date('fecha');
            $table->timestamp('hora');
            $table->integer('formato')->comment('1 = b01, 2 = b03, 3=b05');
            $table->integer('resultado')->comment('0 = proximamente, 1 = local, 2 = visitante, 3 = empate');
            $table->string('equipo_local', 15)->index('equipo1');
            $table->string('equipo_visitante', 15)->index('equipo2');
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
