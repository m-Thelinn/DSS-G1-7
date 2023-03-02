<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PartidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void_partido
     */
    public function run()
    {
        //Borramos los datos de la tabla
        DB::table('partido')->delete();
        //Añadimos datos de prueba al equipo
        DB::table('partido')->insert([
            [
            //PARTid_partidoO1 NAVI vs LEV
            'id_partido' => '1',
            'fecha' => '2023-02-27 18:00:00', 
            'hora' => '2023-02-27 18:00:00',
            'formato' => '2',
            'resultado' => '3',
            'equipo_local' => '001',
            'equipo_visitante' => '003'
            ],
            [
            //PARTid_partidoO1 100T vs FNC
            'id_partido' => '2',
            'fecha' => '2023-02-27 20:30:00', 
            'hora' => '2023-02-27 20:30:00',
            'formato' => '1',
            'resultado' => '2',
            'equipo_local' => '005',
            'equipo_visitante' => '004'
            ],
            [
            //PARTid_partidoO1 KOI vs TH
            'id_partido' => '3',
            'fecha' => '2023-04-30 21:00:00', 
            'hora' => '2023-04-30 21:00:00',
            'formato' => '3',
            'resultado' => '0',
            'equipo_local' => '006', 
            'equipo_visitante' => '002' 
            ],
        ]);
    }
}