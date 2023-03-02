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
        Schema::table('games', function (Blueprint $table) {
            $table->foreign(['visitante_id'], 'games_teams_id_fk')->references(['id'])->on('teams')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['local_id'], 'games_team_id_foreign')->references(['id'])->on('teams')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->dropForeign('games_teams_id_fk');
            $table->dropForeign('games_team_id_foreign');
        });
    }
};
