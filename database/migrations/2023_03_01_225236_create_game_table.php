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
        Schema::create('game', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id')->primary();
            $table->date('fecha');
            $table->timestamp('hora');
            $table->integer('formato')->comment('1 = b01, 2 = b03, 3=b05');
            $table->integer('resultado')->comment('0 = proximamente, 1 = local, 2 = visitante, 3 = empate');
            $table->integer('local_id')->index('game_team_id_fk');
            $table->integer('visitante_id')->index('game_team_id_fk2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game');
    }
};
