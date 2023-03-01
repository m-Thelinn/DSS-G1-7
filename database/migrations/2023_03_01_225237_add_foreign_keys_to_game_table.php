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
        Schema::table('game', function (Blueprint $table) {
            $table->foreign(['local_id'], 'game_team_id_fk')->references(['id'])->on('team')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['visitante_id'], 'game_team_id_fk2')->references(['id'])->on('team')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('game', function (Blueprint $table) {
            $table->dropForeign('game_team_id_fk');
            $table->dropForeign('game_team_id_fk2');
        });
    }
};
