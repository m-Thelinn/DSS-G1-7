<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class EquiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Borramos los datos de la tabla
        DB::table('team')->delete();
        //Añadimos datos de prueba al equipo
        DB::table('team')->insert([            
            [
            //EQUIPO1
            'id' => '001',
            'nombre' => 'Natus Vincere',
            'abreviatura' => 'NAVI',
            'descripcion' => 'Navi es un equipo de esports de Valorant reconocido y exitoso.',
            'foto' => 'https://owcdn.net/img/62a4109ddbd7f.png',
            'pais' => 'Europa',
            'division' => '1',
            ],
            [
            //EQUIPO2
            'id' => '002',
            'nombre' => 'Team Heretics',
            'abreviatura' => 'TH',
            'descripcion' => 'Team Heretics es un equipo español de esports de Valorant con jugadores de gran habilidad como "Mixwell" y "AvovA"',
            'foto' => 'https://owcdn.net/img/637b755224c12.png',
            'pais' => 'Europa',
            'division' => '1',
            ],
            [
            //EQUIPO3 
            'id' => '003',
            'nombre' => 'Leviatán',
            'abreviatura' => 'LEV',
            'descripcion' => 'Leviatán, de procedencia chilena y argentina, han demostrado el gran nivel que existe en Latinoamérica en el Valorant.',
            'foto' => 'https://owcdn.net/img/61b8888cc3860.png',
            'pais' => 'Chile',
            'division' => '2',
            ],
            [
            //EQUIPO4
            'id' => '004',
            'nombre' => 'FNATIC',
            'abreviatura' => 'FNC',
            'descripcion' => 'Fnatic es un equipo europeo de Valorant, compuesto por jugadores de diferentes países. Han ganado varios torneos importantes.',
            'foto' => 'https://owcdn.net/img/62a40cc2b5e29.png',
            'pais' => 'Europa',
            'division' => '1',
            ],
            [
            //EQUIPO5
            'id' => '005',
            'nombre' => '100 Thieves',
            'abreviatura' => '100T',
            'descripcion' => '100 Thieves (100T) es un equipo profesional de Valorant de Estados Unidos, con jugadores de diferentes países.',
            'foto' => 'https://owcdn.net/img/603c00d5c5a08.png',
            'pais' => 'Estados Unidos',
            'division' => '1',
            ],
            [
            //EQUIPO6
            'id' => '006',
            'nombre' => 'KOI',
            'abreviatura' => 'KOI',
            'descripcion' => 'KOI es un equipo profesional de Valorant con sede en España. El equipo está compuesto por jugadores de diferentes países.',
            'foto' => 'https://owcdn.net/img/6346b8ad2331d.png',
            'pais' => 'Europa',
            'division' => '2',
            ],
        ]);
    }
}
