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
            $table->foreign(['equipo_local'], 'partido_equipo_id_equipo_fk')->references(['id_equipo'])->on('equipo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['equipo_visitante'], 'partido_equipo_id_equipo_fk2')->references(['id_equipo'])->on('equipo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
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
            $table->dropForeign('partido_equipo_id_equipo_fk');
            $table->dropForeign('partido_equipo_id_equipo_fk2');
        });
    }
};
