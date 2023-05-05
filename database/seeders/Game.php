<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class Game extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Borramos los datos de la tabla
        DB::table('games')->delete();
        //Añadimos datos de prueba al equipo
        DB::table('games')->insert([
            [
            //PARTidO1 NAVI vs LEV
            'date' => '2023-02-27 18:00:00', 
            'time' => '2023-02-27 18:00:00',
            'format' => 2,
            'result' => 3,
            'local_id' => DB::table('teams')->where('name','Natus Vincere')->first()->id,
            'visitante_id' => DB::table('teams')->where('name','Leviatán')->first()->id,
            ],
            [
            //PARTidO1 100T vs FNC
            'date' => '2023-02-27 20:30:00', 
            'time' => '2023-02-27 20:30:00',
            'format' => 1,
            'result' => 2,
            'local_id' => DB::table('teams')->where('name','100 Thieves')->first()->id,
            'visitante_id' => DB::table('teams')->where('name','FNATIC')->first()->id,
            ],
            [
            //PARTidO1 KOI vs TH
            'date' => '2023-04-30 21:00:00', 
            'time' => '2023-04-30 21:00:00',
            'format' => 3,
            'result' => 0,
            'local_id' => DB::table('teams')->where('name','KOI')->first()->id,
            'visitante_id' => DB::table('teams')->where('name','Team Heretics')->first()->id,
            ],
        ]);
    }
}