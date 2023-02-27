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
        Schema::create('equipo', function (Blueprint $table) {
            $table->comment('');
            $table->string('id_equipo', 15)->primary();
            $table->string('nombre', 50);
            $table->string('abreviatura', 32);
            $table->string('descripcion')->nullable();
            $table->string('foto')->nullable();
            $table->string('pais', 50);
            $table->integer('division');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipo');
    }
};
