<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class Team extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Borramos los datos de la tabla
         
        DB::table('userstats')->delete();   
        DB::table('users')->delete();
        DB::table('games')->delete();
        DB::table('teamstats')->delete();
        DB::table('teams')->delete();
        //Añadimos datos de prueba al equipo
        DB::table('teams')->insert([            
            [
            //Equipo1
            'name' => 'Natus Vincere',
            'short_name' => 'NAVI',
            'description' => 'Navi es un equipo de esports de Valorant reconocido y exitoso.',
            'picture' => 'https://owcdn.net/img/62a4109ddbd7f.png',
            'country' => 'Europa',
            'division' => 1,
            ],
            [
            //Equipo2
            'name' => 'Team Heretics',
            'short_name' => 'TH',
            'description' => 'Team Heretics es un equipo español de esports de Valorant con jugadores de gran habilidad como "Mixwell" y "AvovA"',
            'picture' => 'https://owcdn.net/img/637b755224c12.png',
            'country' => 'Europa',
            'division' => 1,
            ],
            [
            //EQUIPO3 
            'name' => 'Leviatán',
            'short_name' => 'LEV',
            'description' => 'Leviatán, de procedencia chilena y argentina, han demostrado el gran nivel que existe en Latinoamérica en el Valorant.',
            'picture' => 'https://owcdn.net/img/61b8888cc3860.png',
            'country' => 'Chile',
            'division' => 2,
            ],
            [
            //EQUIPO4
            'name' => 'FNATIC',
            'short_name' => 'FNC',
            'description' => 'Fnatic es un equipo europeo de Valorant, compuesto por jugadores de diferentes países. Han ganado varios torneos importantes.',
            'picture' => 'https://owcdn.net/img/62a40cc2b5e29.png',
            'country' => 'Europa',
            'division' => 1,
            ],
            [
            //EQUIPO5
            'name' => '100 Thieves',
            'short_name' => '100T',
            'description' => '100 Thieves (100T) es un equipo profesional de Valorant de Estados Unidos, con jugadores de diferentes países.',
            'picture' => 'https://owcdn.net/img/603c00d5c5a08.png',
            'country' => 'Estados Unidos',
            'division' => 1,
            ],
            [
            //EQUIPO6
            'name' => 'KOI',
            'short_name' => 'KOI',
            'description' => 'KOI es un equipo profesional de Valorant con sede en España. El equipo está compuesto por jugadores de diferentes países.',
            'picture' => 'https://owcdn.net/img/6346b8ad2331d.png',
            'country' => 'Europa',
            'division' => 2,
            ],
        ]);
    }
}