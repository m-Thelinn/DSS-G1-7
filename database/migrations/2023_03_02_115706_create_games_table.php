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
        Schema::create('games', function (Blueprint $table) {
            $table->comment('');
            $table->bigIncrements('id');
            $table->date('date');
            $table->time('time');
            $table->integer('format')->comment('1 = b01, 2 = b03, 3=b05');
            $table->integer('result')->comment('0 = proximamente, 1 = local, 2 = visitante, 3 = empate');
            $table->timestamps();
            $table->unsignedBigInteger('local_id')->index('games_team_id_foreign');
            $table->unsignedBigInteger('visitante_id')->nullable()->index('games_teams_id_fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
