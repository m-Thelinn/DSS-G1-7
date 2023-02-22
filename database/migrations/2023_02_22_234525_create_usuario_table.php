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
        Schema::create('usuario', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->string('nick', 50);
            $table->string('nombre', 50);
            $table->string('apellidos', 50);
            $table->string('email', 50);
            $table->string('password', 50);
            $table->string('dni', 12);
            $table->string('pais', 50)->nullable();
            $table->string('twitter', 50)->nullable();
            $table->integer('rol')->comment('0 = Jugador, 1 = coach, 2 = manager');
            $table->string('telefono', 20);
            $table->boolean('is_admin')->comment('1 = admin');
            $table->integer('equipo')->nullable()->index('equipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
};
