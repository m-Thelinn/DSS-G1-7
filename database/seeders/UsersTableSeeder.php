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
        DB::table('user')->delete();
        //Añadimos datos de prueba al usuario
        DB::table('user')->insert([
            [
            //JUGADOR1
            'id' => '45645325L',
            'nick' => 'Leo',
            'nombre' => 'Leo',
            'apellidos' => 'Jannesson',
            'email' => 'LeoJannesson@gmail.com',
            'password' => '9785',
            'pais' => 'Suecia',
            'twitter' => '@leojannnesson',
            'rol' => '1',
            'telefono' => '667876234',
            'is_admin' => '0',
            'team_id' => 004
            ],

            [
            //JUGADOR2
            'id' => '78690856C',
            'nick' => 'Chronicle',
            'nombre' => 'Timofey',
            'apellidos' => 'Khromov',
            'email' => 'chronicle@gmail.com',
            'password' => '4432',
            'pais' => 'Rusia',
            'twitter' => '@chronicleEZ',
            'rol' => '1',
            'telefono' => '678980990',
            'is_admin' => '0',
            'team_id' => 004
            ],

            [
            //JUGADOR3
            'id' => '49500989D',
            'nick' => 'Derke',
            'nombre' => 'Nikita',
            'apellidos' => 'Sirmitev',
            'email' => 'derke@gmail.com',
            'password' => '6540',
            'pais' => 'Finlandia',
            'twitter' => '@Derke',
            'rol' => '1',
            'telefono' => '754345987',
            'is_admin' => '0',
            'team_id' => 004
            ],

            [
            //JUGADOR4
            'id' => '87654567B',
            'nick' => 'Boaster',
            'nombre' => 'Jake',
            'apellidos' => 'Howlett',
            'email' => 'boaster@gmail.com',
            'password' => '0909',
            'pais' => 'Reino Unido',
            'twitter' => '@officialboaster',
            'rol' => '1',
            'telefono' => '765222123',
            'is_admin' => '0',
            'team_id' => 004
            ],

            [
            //JUGADOR5
            'id' => '48762448A',
            'nick' => 'Alfajer',
            'nombre' => 'Emir',
            'apellidos' => 'Ali Beder',
            'email' => 'alfajer@gmail.com',
            'password' => '8877',
            'pais' => 'Turquia',
            'twitter' => '@Alfajervl',
            'rol' => '1',
            'telefono' => '679098087',
            'is_admin' => '0',
            'team_id' => 004
            ],
    

            //ENTRENADOR1
            [
            'id' => '97456286M',
            'nick' => 'Mini',
            'nombre' => 'Jacob',
            'apellidos' => 'Harris',
            'email' => 'mini@gmail.com',
            'password' => '7743',
            'pais' => 'Reino Unido',
            'twitter' => '@minijake_',
            'rol' => '2',
            'telefono' => '733988234',
            'is_admin' => '0',
            'team_id' => 004
            ],

            //MANAGER1
            [
            'id' => '89645329C',
            'nick' => 'CoJo',
            'nombre' => 'Colin',
            'apellidos' => 'Johnson',
            'email' => 'CoJo@gmail.com',
            'password' => '4471',
            'pais' => 'Reino Unido',
            'twitter' => '@CoJoPM',
            'rol' => '3',
            'telefono' => '784321456',
            'is_admin' => '0',
            'team_id' => 004
            ],

            [
            //JUGADOR1
            'id' => '96456541S',
            'nick' => 'stellar',
            'nombre' => 'Brenden',
            'apellidos' => 'McGrath',
            'email' => 'stellar@gmail.com',
            'password' => 'password1',
            'pais' => 'Estados unidos',
            'twitter' => '@st9llar',
            'rol' => '1',
            'telefono' => '745652123',
            'is_admin' => '0',
            'team_id' => 005
            ],

            [
            //JUGADOR2
            'id' => '41754896B',
            'nick' => 'bang',
            'nombre' => 'Sean',
            'apellidos' => 'Bezerra',
            'email' => 'bangzerra@gmail.com',
            'password' => 'password2',
            'pais' => 'Estados unidos',
            'twitter' => '@bangzerra',
            'rol' => '1',
            'telefono' => '741569897',
            'is_admin' => '0',
            'team_id' => 005
            ],

            [
            //JUGADOR3 
            'id' => '87945698C',
            'nick' => 'Cryocells',
            'nombre' => 'Matthew',
            'apellidos' => 'Panganiban',
            'email' => 'cryocells@gmail.com',
            'password' => 'password3',
            'pais' => 'Estados unidos',
            'twitter' => '@Cryocells_',
            'rol' => '1',
            'telefono' => '648989731',
            'is_admin' => '0',
            'team_id' => 005
            ],

            [
            //JUGADOR4
            'id' => '78456982D',
            'nick' => 'Derrek',
            'nombre' => 'Derrek',
            'apellidos' => 'Ha',
            'email' => 'derrek@gmail.com',
            'password' => 'password4',
            'pais' => 'Estados unidos',
            'twitter' => '@DerrekOW',
            'rol' => '1',
            'telefono' => '699320012',
            'is_admin' => '0',
            'team_id' => 005
            ],

            [
            //JUGADOR5
            'id' => '87936549A',
            'nick' => 'Asuna',
            'nombre' => 'Peter',
            'apellidos' => 'Mazuryk',
            'email' => 'asuna@gmail.com',
            'password' => 'password5',
            'pais' => 'Estados Unidos',
            'twitter' => '@Asunaa',
            'rol' => '1',
            'telefono' => '745699800',
            'is_admin' => '0',
            'team_id' => 005
            ],

            //ENTRENADOR2
            [
            'id' => '65478963M',
            'nick' => 'Mikes',
            'nombre' => 'Michael',
            'apellidos' => 'Hockom',
            'email' => 'mikes@gmail.com',
            'password' => 'password6',
            'pais' => 'Estados Unidos',
            'twitter' => '@MikesHD_',
            'rol' => '2',
            'telefono' => '600321123',
            'is_admin' => '0',
            'team_id' => 005
            ],

            //MANAGER2
            [
            'id' => '745896541D',
            'nick' => 'ddk',
            'nombre' => 'Daniel',
            'apellidos' => 'Kapadia',
            'email' => 'ddkesports@gmail.com',
            'password' => 'password7',
            'pais' => 'Estados Unidos',
            'twitter' => '@ddkesports',
            'rol' => '3',
            'telefono' => '696388945',
            'is_admin' => '0',
            'team_id' => 005
            ],
            //JUGADOR1
            [
            'id' => '49768745K',
            'nick' => 'koldamenta',
            'nombre' => 'Jose Luis',
            'apellidos' => 'Aranguren',
            'email' => 'koldamenta@gmail.com',
            'password' => 'PASSWORD1',
            'pais' => 'España',
            'twitter' => '@koldamenta',
            'rol' => '1',
            'telefono' => '612457896',
            'is_admin' => '0',
            'team_id' => 006
            ],

            [
            //JUGADOR2
            'id' => '87456300S',
            'nick' => 'starxo',
            'nombre' => 'Patryk',
            'apellidos' => 'Kopczynski',
            'email' => 'starxo5@gmail.com',
            'password' => 'PASSWORD2',
            'pais' => 'Polonia',
            'twitter' => '@starxo5',
            'rol' => '1',
            'telefono' => '722365478',
            'is_admin' => '0',
            'team_id' => 006
            ],

            [
            //JUGADOR3
            'id' => '49768896S',
            'nick' => 'sheydos',
            'nombre' => 'Bogdan',
            'apellidos' => 'Naumov',
            'email' => 'sheydos@gmail.com',
            'password' => 'PASSWORD3',
            'pais' => 'Rusia',
            'twitter' => '@Sheydosk1ng',
            'rol' => '1',
            'telefono' => '741258963',
            'is_admin' => '0',
            'team_id' => 006
            ],

            [
            //JUGADOR4
            'id' => '47898741T',
            'nick' => 'trexx',
            'nombre' => 'Nikita',
            'apellidos' => 'Chereidchenko',
            'email' => 'trexx@gmail.com',
            'password' => 'PASSWORD4',
            'pais' => 'Rusia',
            'twitter' => '@trexxfps',
            'rol' => '1',
            'telefono' => '769321456',
            'is_admin' => '0',
            'team_id' => 006
            ],

            [
            //JUGADOR5
            'id' => '98765231W',
            'nick' => 'Wolfen',
            'nombre' => 'Berkant',
            'apellidos' => 'Joshkun',
            'email' => 'wolfen@gmail.com',
            'password' => 'PASSWORD5',
            'pais' => 'Bulgaria',
            'twitter' => '@WolfenVAL',
            'rol' => '1',
            'telefono' => '632123897',
            'is_admin' => '0',
            'team_id' => 006
            ],
            //ENTRENADOR3
            [
            'id' => '48745478G',
            'nick' => 'goked',
            'nombre' => 'Alex',
            'apellidos' => 'Kie',
            'email' => 'goked@gmail.com',
            'password' => 'PASSWORD6',
            'pais' => 'España',
            'twitter' => '@gokedTV',
            'rol' => '2',
            'telefono' => '722412569',
            'is_admin' => '0',
            'team_id' => 006
            ],

            //MANAGER3
            [
            'id' => '87456321B',
            'nick' => 'BARBARR',
            'nombre' => 'André',
            'apellidos' => 'Möller',
            'email' => 'barbarr@gmail.com',
            'password' => 'PASSWORD7',
            'pais' => 'Suecia',
            'twitter' => '@BARBARRcs',
            'rol' => '3',
            'telefono' => '744896354',
            'is_admin' => '0',
            'team_id' => 006
            ],

            [
            //USUARIOS NAVI
            //JUGADOR1
            'id' => '45645546Y',
            'nick' => 'ANGE1',
            'nombre' => 'Kyrylo',
            'apellidos' => 'Karasov',
            'email' => 'KyryloKarasov@gmail.com',
            'password' => '5454',
            'pais' => 'Ucrania',
            'twitter' => '@officialange1',
            'rol' => '1',
            'telefono' => '640196681',
            'is_admin' => '0',
            'team_id' => 001
            ],

            [
            //JUGADOR2
            'id' => '78634566A',
            'nick' => 'Shao',
            'nombre' => 'Andrey',
            'apellidos' => 'Kiprsky',
            'email' => 'AndreyKirprsky@gmail.com',
            'password' => '4433',
            'pais' => 'Rusia',
            'twitter' => '@Shaolele',
            'rol' => '1',
            'telefono' => '640196682',
            'is_admin' => '0',
            'team_id' => 001
            ],

            [
            //JUGADOR3
            'id' => '452136834A',
            'nick' => 'Zyppan',
            'nombre' => 'Pontus',
            'apellidos' => 'Eek',
            'email' => 'PontusEek@gmail.com',
            'password' => '3521',
            'pais' => 'Suecia',
            'twitter' => '@zyppaan',
            'rol' => '1',
            'telefono' => '640196683',
            'is_admin' => '0',
            'team_id' => 001
            ],

            [
            //JUGADOR4
            'id' => '155963681A',
            'nick' => 'SUYGETSU',
            'nombre' => 'Dmitry',
            'apellidos' => 'Llyushin',
            'email' => 'DmitryLlyushin@gmail.com',
            'password' => '0909',
            'pais' => 'Rusia',
            'twitter' => '@suygetsu_',
            'rol' => '1',
            'telefono' => '640196684',
            'is_admin' => '0',
            'team_id' => 001
            ],

            [
            //JUGADOR5 
            'id' => '52862448Y',
            'nick' => 'cNed',
            'nombre' => 'Mehmet',
            'apellidos' => 'Yağiz İpek',
            'email' => 'MehmetYağizİpek@gmail.com',
            'password' => '8778',
            'pais' => 'Turquia',
            'twitter' => '@cNedf0r',
            'rol' => '0',
            'telefono' => '679098057',
            'is_admin' => '0',
            'team_id' => 001
            ],
    

            //ENTRENADOR1
            [
            'id' => '974534358S',
            'nick' => 'd00mbr0s',
            'nombre' => 'Erik',
            'apellidos' => 'Sandgren',
            'email' => 'ErikSandgren@gmail.com',
            'password' => '4435',
            'pais' => 'Suecia',
            'twitter' => '@d00mbr0s',
            'rol' => '2',
            'telefono' => '640196685',
            'is_admin' => '0',
            'team_id' => 001
            ],

            //MANAGER1
            [
            'id' => '41896223C',
            'nick' => 'LATEKS',
            'nombre' => 'Oliwer',
            'apellidos' => 'Fahlander',
            'email' => 'Oliwer@gmail.com',
            'password' => '7234',
            'pais' => 'Suecia',
            'twitter' => '@LATEKSgg',
            'rol' => '3',
            'telefono' => '640196686',
            'is_admin' => '0',
            'team_id' => 001
            ],

            //USUARIOS TEAM HERETICS
            //JUGADOR1
            [
            'id' => '45862120Q',
            'nick' => 'Mixwell',
            'nombre' => 'Oscar',
            'apellidos' => 'Cañellas',
            'email' => 'mixwell@gmail.com',
            'password' => '6789',
            'pais' => 'España',
            'twitter' => '@Mixwell',
            'rol' => '1',
            'telefono' => '640196687',
            'is_admin' => '0',
            'team_id' => 002
            ],

            [
            //JUGADOR2
            'id' => '78638970A',
            'nick' => 'AvovA',
            'nombre' => 'Auni',
            'apellidos' => 'Chahade',
            'email' => 'AvovA@gmail.com',
            'password' => '2593',
            'pais' => 'Dinamarca',
            'twitter' => '@AvovaFPS',
            'rol' => '1',
            'telefono' => '640196688',
            'is_admin' => '0',
            'team_id' => 002
            ],

            [
            //JUGADOR3
            'id' => '45258254A',
            'nick' => 'zeek',
            'nombre' => 'Aleksander',
            'apellidos' => 'Zygmunt',
            'email' => 'zeek@gmail.com',
            'password' => '7813',
            'pais' => 'Polonia',
            'twitter' => '@zeekrino',
            'rol' => '1',
            'telefono' => '640196689',
            'is_admin' => '0',
            'team_id' => 002
            ],

            [
            'id' => '13466885A',
            //JUGADOR4
            'nick' => 'Boo',
            'nombre' => 'Ričardas',
            'apellidos' => 'Lukaševičius',
            'email' => 'Boo@gmail.com',
            'password' => '0959',
            'pais' => 'Lituania',
            'twitter' => '@BooVAL1',
            'rol' => '1',
            'telefono' => '640196690',
            'is_admin' => '0',
            'team_id' => 002
            ],

            [
            //JUGADOR5
            'id' => '12872449Y',
            'nick' => 'keloqz',
            'nombre' => 'Cista',
            'apellidos' => 'Wassim',
            'email' => 'keloqz@gmail.com',
            'password' => '1123',
            'pais' => 'Francia',
            'twitter' => '@keloqz',
            'rol' => '0',
            'telefono' => '679098085',
            'is_admin' => '0',
            'team_id' => 002
            ],
    

            //ENTRENADOR1
            [
            'id' => '9876543N',
            'nick' => 'Neilzinho',
            'nombre' => 'Neil',
            'apellidos' => 'Finlay',
            'email' => 'neilzinho@gmail.com',
            'password' => '12345678',
            'pais' => 'Inglaterra',
            'twitter' => 'neilzinho',
            'rol' => '2',
            'telefono' => '733988234',
            'is_admin' => '0',
            'team_id' => 002
            ],

            //MANAGER1
            [
            'id' => '1122334N',
            'nick' => 'Ocelote',
            'nombre' => 'Carlos',
            'apellidos' => 'Rodriguez',
            'email' => 'ocelote@gmail.com',
            'password' => '12345678',
            'pais' => 'España',
            'twitter' => 'oceloteworld',
            'rol' => '3',
            'telefono' => '632654789',
            'is_admin' => '0',
            'team_id' => 002
            ],

            //USUARIOS LEVIATAN
            //JUGADOR1
            [
            'id' => '45862389C',
            'nick' => 'keznit',
            'nombre' => 'Angelo',
            'apellidos' => 'Mori',
            'email' => 'keznit@gmail.com',
            'password' => '8967',
            'pais' => 'Chile',
            'twitter' => '@keznitdeuS',
            'rol' => '1',
            'telefono' => '640196691',
            'is_admin' => '0',
            'team_id' => 003
            ],

            [
            //JUGADOR2
            'id' => '54808970C',
            'nick' => 'Tacolilla',
            'nombre' => 'Vicente',
            'apellidos' => 'Compagnon',
            'email' => 'TacoTaco@gmail.com',
            'password' => '2103',
            'pais' => 'Chile',
            'twitter' => '@tacolillalzh',
            'rol' => '1',
            'telefono' => '640196691',
            'is_admin' => '0',
            'team_id' => 003
            ],

            [
            //JUGADOR3
            'id' => '45258235A',
            'nick' => 'kiNgg',
            'nombre' => 'Francisco',
            'apellidos' => 'Aravena',
            'email' => 'kiNgg@gmail.com',
            'password' => '8927',
            'pais' => 'Chile',
            'twitter' => '@kiNggfps',
            'rol' => '1',
            'telefono' => '640196692',
            'is_admin' => '0',
            'team_id' => 003
            ],

            [
            //JUGADOR4
            'id' => '13466557C',
            'nick' => 'Mazino',
            'nombre' => 'Roberto',
            'apellidos' => 'Rivas',
            'email' => 'MazinoFPS@gmail.com',
            'password' => '1990',
            'pais' => 'Chile',
            'twitter' => '@Mazinofps',
            'rol' => '1',
            'telefono' => '640196693',
            'is_admin' => '0',
            'team_id' => 003
            ],

            [
            //JUGADOR5 
            'id' => '12510979C',
            'nick' => 'Shyy',
            'nombre' => 'Fabian',
            'apellidos' => 'Usnayo',
            'email' => 'Shyy@gmail.com',
            'password' => '1548',
            'pais' => 'Chile',
            'twitter' => '@ShyyFab',
            'rol' => '0',
            'telefono' => '679098098',
            'is_admin' => '0',
            'team_id' => 003
            ],
    
            //ENTRENADOR1
            [
            'id' => '78484301A',
            'nick' => 'Onur',
            'nombre' => 'Rodrigo',
            'apellidos' => 'Dalmagro',
            'email' => 'Onur@gmail.com',
            'password' => '1233',
            'pais' => 'Argentina',
            'twitter' => 'onurthegreat',
            'rol' => '2',
            'telefono' => '733988234',
            'is_admin' => '0',
            'team_id' => 003
            ],

            //MANAGER1
            [
            'id' => '1542334N',
            'nick' => 'torito',
            'nombre' => 'Cristobal',
            'apellidos' => 'Quintana',
            'email' => 'torito@gmail.com',
            'password' => '5630',
            'pais' => 'Tailandia',
            'twitter' => 'toritoravalero',
            'rol' => '3',
            'telefono' => '634654782',
            'is_admin' => '0',
            'team_id' => 003
            ],
        ]);
      }
  }