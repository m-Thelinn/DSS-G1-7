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
        Schema::table('partido', function (Blueprint $table) {
            $table->foreign(['equipo1'], 'equipo1')->references(['id'])->on('equipo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['equipo2'], 'equipo2')->references(['id'])->on('equipo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partido', function (Blueprint $table) {
            $table->dropForeign('equipo1');
            $table->dropForeign('equipo2');
        });
    }
};
