<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Borramos los datos de la tabla
        DB::table('usuario')->delete();
        //Añadimos datos de prueba al usuario
        DB::table('usuario')->insert([
            [
            //ADMIN
            'dni' => '01234567H', 
            'nick' => 'TheLinn',
            'nombre' => 'Miguel',
            'apellidos' => 'Rodríguez',
            'email' => 'mrs121@alu.ua.es',
            'password' => '12345678',
            'pais' => 'España',
            'twitter' => 'thelinn',
            'rol' => '0',
            'telefono' => '654321987',
            'is_admin' => '1'
            ],
            [
            //NADA
            'dni' => '01334567K', 
            'nick' => 'Pacoflow',
            'nombre' => 'Francisco',
            'apellidos' => 'Fernandez',
            'email' => 'pacoflow@gmail.com',
            'password' => '12345678',
            'pais' => 'España',
            'twitter' => 'pacoflow',
            'rol' => '0',
            'telefono' => '654321987',
            'is_admin' => '0'
            ],
            [
            //JUGADOR
            'dni' => '00009999D', 
            'nick' => 'M1xwell',
            'nombre' => 'Oscar',
            'apellidos' => 'Cañellas',
            'email' => 'm1xwell@gmail.com',
            'password' => '12345678',
            'pais' => 'España',
            'twitter' => 'm1xwell',
            'rol' => '1',
            'telefono' => '654321987',
            'is_admin' => '0'
            ],

            [
            //JUGADOR
            'dni' => '24681023Q', 
            'nick' => 'Frenzaa',
            'nombre' => 'David',
            'apellidos' => 'Martinez',
            'email' => 'papu@gmail.com',
            'password' => '12345678',
            'pais' => 'Argentina',
            'twitter' => 'frenzaa',
            'rol' => '1',
            'telefono' => '654321987',
            'is_admin' => '0'
            ],
            [
            //JUGADOR
            'dni' => '01234567M', 
            'nick' => 'Frenzaa',
            'nombre' => 'David',
            'apellidos' => 'Martinez',
            'email' => 'papu@gmail.com',
            'password' => '12345678',
            'pais' => 'Argentina',
            'twitter' => 'frenzaa',
            'rol' => '1',
            'telefono' => '654321987',
            'is_admin' => '0'
            ],

            [
            //JUGADOR
            'dni' => '01234567P', 
            'nick' => 'Ximy',
            'nombre' => 'Manuel',
            'apellidos' => 'Sánchez',
            'email' => 'ximy@gmail.com',
            'password' => '12345678',
            'pais' => 'Italia',
            'twitter' => 'ximy',
            'rol' => '1',
            'telefono' => '654321987',
            'is_admin' => '0'
            ],

            [
            //JUGADOR
            'dni' => '01234567X', 
            'nick' => 'Chrol0',
            'nombre' => 'Santiago',
            'apellidos' => 'Perez',
            'email' => 'chorlo@gmail.com',
            'password' => '12345678',
            'pais' => 'Grecia',
            'twitter' => 'chorlo',
            'rol' => '1',
            'telefono' => '654321987',
            'is_admin' => '0'
            ],
            [
            //JUGADOR
            'dni' => '01234567A', 
            'nick' => 'SkyGi',
            'nombre' => 'Joel',
            'apellidos' => 'Gutierrez',
            'email' => 'skygi@gmail.com',
            'password' => '12345678',
            'pais' => 'España',
            'twitter' => 'skygi',
            'rol' => '1',
            'telefono' => '654321987',
            'is_admin' => '0'
            ],
            //ENTRENADOR
            [
            'dni' => '9876543N',
            'nick' => 'Neilzinho',
            'nombre' => 'Neil',
            'apellidos' => 'Finlay',
            'email' => 'neilzinho@gmail.com',
            'password' => '12345678',
            'pais' => 'Inglaterra',
            'twitter' => 'neilzinho',
            'rol' => '2',
            'telefono' => '733988234',
            'is_admin' => '0'
            ],

            //MANAGER
            [
            'dni' => '1122334N',
            'nick' => 'Ocelote',
            'nombre' => 'Carlos',
            'apellidos' => 'Rodriguez',
            'email' => 'ocelote@gmail.com',
            'password' => '12345678',
            'pais' => 'España',
            'twitter' => 'oceloteworld',
            'rol' => '3',
            'telefono' => '632654789',
            'is_admin' => '0'
            ],
            [
            //JUGADOR1
            'dni' => '45645325L',
            'nick' => 'Leo',
            'nombre' => 'Leo',
            'apellidos' => 'Jannesson',
            'email' => 'LeoJannesson@gmail.com',
            'password' => '9785',
            'pais' => 'Suecia',
            'twitter' => '@leojannnesson',
            'rol' => '1',
            'telefono' => '667876234',
            'is_admin' => '0'
            ],

            [
            //JUGADOR2
            'dni' => '78690856C',
            'nick' => 'Chronicle',
            'nombre' => 'Timofey',
            'apellidos' => 'Khromov',
            'email' => 'chronicle@gmail.com',
            'password' => '4432',
            'pais' => 'Rusia',
            'twitter' => '@chronicleEZ',
            'rol' => '1',
            'telefono' => '678980990',
            'is_admin' => '0'
            ],

            [
            //JUGADOR3
            'dni' => '49500989D',
            'nick' => 'Derke',
            'nombre' => 'Nikita',
            'apellidos' => 'Sirmitev',
            'email' => 'derke@gmail.com',
            'password' => '6540',
            'pais' => 'Finlandia',
            'twitter' => '@Derke',
            'rol' => '1',
            'telefono' => '754345987',
            'is_admin' => '0'
            ],

            [
            //JUGADOR4
            'dni' => '87654567B',
            'nick' => 'Boaster',
            'nombre' => 'Jake',
            'apellidos' => 'Howlett',
            'email' => 'boaster@gmail.com',
            'password' => '0909',
            'pais' => 'Reino Unido',
            'twitter' => '@officialboaster',
            'rol' => '1',
            'telefono' => '765222123',
            'is_admin' => '0'
            ],

            [
            //JUGADOR5
            'dni' => '48762448A',
            'nick' => 'Alfajer',
            'nombre' => 'Emir',
            'apellidos' => 'Ali Beder',
            'email' => 'alfajer@gmail.com',
            'password' => '8877',
            'pais' => 'Turquia',
            'twitter' => '@Alfajervl',
            'rol' => '1',
            'telefono' => '679098087',
            'is_admin' => '0'
            ],
    

            //ENTRENADOR1
            [
            'dni' => '97456286M',
            'nick' => 'Mini',
            'nombre' => 'Jacob',
            'apellidos' => 'Harris',
            'email' => 'mini@gmail.com',
            'password' => '7743',
            'pais' => 'Reino Unido',
            'twitter' => '@minijake_',
            'rol' => '2',
            'telefono' => '733988234',
            'is_admin' => '0'
            ],

            //MANAGER1
            [
            'dni' => '89645329C',
            'nick' => 'CoJo',
            'nombre' => 'Colin',
            'apellidos' => 'Johnson',
            'email' => 'CoJo@gmail.com',
            'password' => '4471',
            'pais' => 'Reino Unido',
            'twitter' => '@CoJoPM',
            'rol' => '3',
            'telefono' => '784321456',
            'is_admin' => '0'
            ],

            [
            //JUGADOR1
            'dni' => '96456541S',
            'nick' => 'stellar',
            'nombre' => 'Brenden',
            'apellidos' => 'McGrath',
            'email' => 'stellar@gmail.com',
            'password' => 'password1',
            'pais' => 'Estados unidos',
            'twitter' => '@st9llar',
            'rol' => '1',
            'telefono' => '745652123',
            'is_admin' => '0'
            ],

            [
            //JUGADOR2
            'dni' => '41754896B',
            'nick' => 'bang',
            'nombre' => 'Sean',
            'apellidos' => 'Bezerra',
            'email' => 'bangzerra@gmail.com',
            'password' => 'password2',
            'pais' => 'Estdos unidos',
            'twitter' => '@bangzerra',
            'rol' => '1',
            'telefono' => '741569897',
            'is_admin' => '0'
            ],

            [
            //JUGADOR3 
            'dni' => '87945698C',
            'nick' => 'Cryocells',
            'nombre' => 'Matthew',
            'apellidos' => 'Panganiban',
            'email' => 'cryocells@gmail.com',
            'password' => 'password3',
            'pais' => 'Estados unidos',
            'twitter' => '@Cryocells_',
            'rol' => '1',
            'telefono' => '648989731',
            'is_admin' => '0'
            ],

            [
            //JUGADOR4
            'dni' => '78456982D',
            'nick' => 'Derrek',
            'nombre' => 'Derrek',
            'apellidos' => 'Ha',
            'email' => 'derrek@gmail.com',
            'password' => 'password4',
            'pais' => 'Estados unidos',
            'twitter' => '@DerrekOW',
            'rol' => '1',
            'telefono' => '699320012',
            'is_admin' => '0'
            ],

            [
            //JUGADOR5
            'dni' => '87936549A',
            'nick' => 'Asuna',
            'nombre' => 'Peter',
            'apellidos' => 'Mazuryk',
            'email' => 'asuna@gmail.com',
            'password' => 'password5',
            'pais' => 'Estados Unidos',
            'twitter' => '@Asunaa',
            'rol' => '1',
            'telefono' => '745699800',
            'is_admin' => '0'
            ],

            //ENTRENADOR2
            [
            'dni' => '65478963M',
            'nick' => 'Mikes',
            'nombre' => 'Michael',
            'apellidos' => 'Hockom',
            'email' => 'mikes@gmail.com',
            'password' => 'password6',
            'pais' => 'Estados Unidos',
            'twitter' => '@MikesHD_',
            'rol' => '2',
            'telefono' => '600321123',
            'is_admin' => '0'
            ],

            //MANAGER2
            [
            'dni' => '745896541D',
            'nick' => 'ddk',
            'nombre' => 'Daniel',
            'apellidos' => 'Kapadia',
            'email' => 'ddkesports@gmail.com',
            'password' => 'password7',
            'pais' => 'Estados Unidos',
            'twitter' => '@ddkesports',
            'rol' => '3',
            'telefono' => '696388945',
            'is_admin' => '0'
            ],
            //JUGADOR1
            [
            'dni' => '49768745K',
            'nick' => 'koldamenta',
            'nombre' => 'Jose Luis',
            'apellidos' => 'Aranguren',
            'email' => 'koldamenta@gmail.com',
            'password' => 'PASSWORD1',
            'pais' => 'España',
            'twitter' => '@koldamenta',
            'rol' => '1',
            'telefono' => '612457896',
            'is_admin' => '0'
            ],

            [
            //JUGADOR2
            'dni' => '87456300S',
            'nick' => 'starxo',
            'nombre' => 'Patryk',
            'apellidos' => 'Kopczynski',
            'email' => 'starxo5@gmail.com',
            'password' => 'PASSWORD2',
            'pais' => 'Polonia',
            'twitter' => '@starxo5',
            'rol' => '1',
            'telefono' => '722365478',
            'is_admin' => '0'
            ],

            [
            //JUGADOR3
            'dni' => '49768896S',
            'nick' => 'sheydos',
            'nombre' => 'Bogdan',
            'apellidos' => 'Naumov',
            'email' => 'sheydos@gmail.com',
            'password' => 'PASSWORD3',
            'pais' => 'Rusia',
            'twitter' => '@Sheydosk1ng',
            'rol' => '1',
            'telefono' => '741258963',
            'is_admin' => '0'
            ],

            [
            //JUGADOR4
            'dni' => '47898741T',
            'nick' => 'trexx',
            'nombre' => 'Nikita',
            'apellidos' => 'Cherednichenko',
            'email' => 'trexx@gmail.com',
            'password' => 'PASSWORD4',
            'pais' => 'Rusia',
            'twitter' => '@trexxfps',
            'rol' => '1',
            'telefono' => '769321456',
            'is_admin' => '0'
            ],

            [
            //JUGADOR5
            'dni' => '98765231W',
            'nick' => 'Wolfen',
            'nombre' => 'Berkant',
            'apellidos' => 'Joshkun',
            'email' => 'wolfen@gmail.com',
            'password' => 'PASSWORD5',
            'pais' => 'Bulgaria',
            'twitter' => '@WolfenVAL',
            'rol' => '1',
            'telefono' => '632123897',
            'is_admin' => '0'
            ],
            //ENTRENADOR3
            [
            'dni' => '48745478G',
            'nick' => 'goked',
            'nombre' => 'Alex',
            'apellidos' => 'Kie',
            'email' => 'goked@gmail.com',
            'password' => 'PASSWORD6',
            'pais' => 'España',
            'twitter' => '@gokedTV',
            'rol' => '2',
            'telefono' => '722412569',
            'is_admin' => '0'
            ],

            //MANAGER3
            [
            'dni' => '87456321B',
            'nick' => 'BARBARR',
            'nombre' => 'André',
            'apellidos' => 'Möller',
            'email' => 'barbarr@gmail.com',
            'password' => 'PASSWORD7',
            'pais' => 'Suecia',
            'twitter' => '@BARBARRcs',
            'rol' => '3',
            'telefono' => '744896354',
            'is_admin' => '0'
            ],
        ]);
      }
  }
    

