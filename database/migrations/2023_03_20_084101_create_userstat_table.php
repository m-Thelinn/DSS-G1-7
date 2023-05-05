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
        Schema::create('userstats', function (Blueprint $table) {
            $table->id();
            $table->integer('kills');
            $table->integer('assists');
            $table->integer('deaths');
            $table->integer('times_mvp');
            $table->integer('win_rate');
            $table->integer('adr');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userstats');
    }
};
