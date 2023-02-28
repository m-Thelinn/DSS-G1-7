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
        DB::table('equipo')->delete();
        //Añadimos datos de prueba al equipo
        DB::table('equipo')->insert([            
            [
            //EQUIPO1
            'id_equipo' => '001',
            'nombre' => 'Natus Vincere',
            'abreviatura' => 'NAVI',
            'descripcion' => 'Navi es un equipo de esports de Valorant reconocido y exitoso.
            Liderados por el veterano Kirill "ANGE1" Karasiow, cuentan con jugadores altamente talentosos y experimentados en el juego.',
            'foto' => 'https://owcdn.net/img/62a4109ddbd7f.png',
            'pais' => 'Europa',
            'division' => '1',
            ],
            [
            //EQUIPO2
            'id_equipo' => '002',
            'nombre' => 'Team Heretics',
            'abreviatura' => 'TH',
            'descripcion' => 'Team Heretics es un equipo español de esports de Valorant con jugadores de gran habilidad como "Mixwell" y "AvovA", 
            el equipo ha demostrado un gran nivel en torneos internacionales y ha sido reconocido por su estilo de juego agresivo y creativo.',
            'foto' => 'https://owcdn.net/img/637b755224c12.png',
            'pais' => 'Europa',
            'division' => '1',
            ],
            [
            //EQUIPO3 
            'id_equipo' => '003',
            'nombre' => 'Leviatán',
            'abreviatura' => 'LEV',
            'descripcion' => 'Leviatán, de procedencia chilena y argentina, han demostrado el gran nivel que existe en Latinoamérica en el Valorant. 
            Han dado la talla en numerosos encuentros con grandes jugadores como "Tacolilla" y "Mazino" sumado a su juego controlador y agresivo.',
            'foto' => 'https://owcdn.net/img/61b8888cc3860.png',
            'pais' => 'Chile',
            'division' => '2',
            ],
        ]);
    }
}
