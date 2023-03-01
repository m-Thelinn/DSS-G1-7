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
        Schema::create('user', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id')->primary();
            $table->string('nick', 50);
            $table->string('nombre', 50);
            $table->string('apellidos', 50);
            $table->string('email', 50);
            $table->string('password', 50);
            $table->string('pais', 50)->nullable();
            $table->string('twitter', 50)->nullable();
            $table->integer('rol')->comment('0 = nada, 1 = jugador, 2 =  coach, 3 = manager');
            $table->string('telefono', 20);
            $table->boolean('is_admin')->comment('1 = admin');
            $table->integer('team_id')->nullable()->index('user_team_id_fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
};
