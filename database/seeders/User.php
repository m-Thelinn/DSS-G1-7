<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Borramos los datos de la tabla
        DB::table('users')->delete();
        //Añadimos datos de prueba al usuario
        DB::table('users')->insert([
            [
            //JUGADOR1            
            'nickname' => 'Leo',
            'name' => 'Leo',
            'lastname' => 'Jannesson',
            'email' => 'LeoJannesson@gmail.com',
            'password' => '9785',
            'country' => 'Suecia',
            'twitter' => '@leojannnesson',
            'rol' => '1',
            'phone' => '667876234',
            'is_admin' => '0',
            'team_id' => 4
            ],

            [
            //JUGADOR2            
            'nickname' => 'Chronicle',
            'name' => 'Timofey',
            'lastname' => 'Khromov',
            'email' => 'chronicle@gmail.com',
            'password' => '4432',
            'country' => 'Rusia',
            'twitter' => '@chronicleEZ',
            'rol' => '1',
            'phone' => '678980990',
            'is_admin' => '0',
            'team_id' => 4
            ],

            [
            //JUGADOR3            
            'nickname' => 'Derke',
            'name' => 'Nikita',
            'lastname' => 'Sirmitev',
            'email' => 'derke@gmail.com',
            'password' => '6540',
            'country' => 'Finlandia',
            'twitter' => '@Derke',
            'rol' => '1',
            'phone' => '754345987',
            'is_admin' => '0',
            'team_id' => 4
            ],

            [
            //JUGADOR4            
            'nickname' => 'Boaster',
            'name' => 'Jake',
            'lastname' => 'Howlett',
            'email' => 'boaster@gmail.com',
            'password' => '0909',
            'country' => 'Reino Unido',
            'twitter' => '@officialboaster',
            'rol' => '1',
            'phone' => '765222123',
            'is_admin' => '0',
            'team_id' => 4
            ],

            [
            //JUGADOR5            
            'nickname' => 'Alfajer',
            'name' => 'Emir',
            'lastname' => 'Ali Beder',
            'email' => 'alfajer@gmail.com',
            'password' => '8877',
            'country' => 'Turquia',
            'twitter' => '@Alfajervl',
            'rol' => '1',
            'phone' => '679098087',
            'is_admin' => '0',
            'team_id' => 4
            ],
    

            //ENTRENADOR1
            [            
            'nickname' => 'Mini',
            'name' => 'Jacob',
            'lastname' => 'Harris',
            'email' => 'mini@gmail.com',
            'password' => '7743',
            'country' => 'Reino Unido',
            'twitter' => '@minijake_',
            'rol' => '2',
            'phone' => '733988234',
            'is_admin' => '0',
            'team_id' => 4
            ],

            //MANAGER1
            [            
            'nickname' => 'CoJo',
            'name' => 'Colin',
            'lastname' => 'Johnson',
            'email' => 'CoJo@gmail.com',
            'password' => '4471',
            'country' => 'Reino Unido',
            'twitter' => '@CoJoPM',
            'rol' => '3',
            'phone' => '784321456',
            'is_admin' => '0',
            'team_id' => 4
            ],

            [
            //JUGADOR1            
            'nickname' => 'stellar',
            'name' => 'Brenden',
            'lastname' => 'McGrath',
            'email' => 'stellar@gmail.com',
            'password' => 'password1',
            'country' => 'Estados unidos',
            'twitter' => '@st9llar',
            'rol' => '1',
            'phone' => '745652123',
            'is_admin' => '0',
            'team_id' => 5
            ],

            [
            //JUGADOR2            
            'nickname' => 'bang',
            'name' => 'Sean',
            'lastname' => 'Bezerra',
            'email' => 'bangzerra@gmail.com',
            'password' => 'password2',
            'country' => 'Estados unidos',
            'twitter' => '@bangzerra',
            'rol' => '1',
            'phone' => '741569897',
            'is_admin' => '0',
            'team_id' => 5
            ],

            [
            //JUGADOR3             
            'nickname' => 'Cryocells',
            'name' => 'Matthew',
            'lastname' => 'Panganiban',
            'email' => 'cryocells@gmail.com',
            'password' => 'password3',
            'country' => 'Estados unidos',
            'twitter' => '@Cryocells_',
            'rol' => '1',
            'phone' => '648989731',
            'is_admin' => '0',
            'team_id' => 5
            ],

            [
            //JUGADOR4            
            'nickname' => 'Derrek',
            'name' => 'Derrek',
            'lastname' => 'Ha',
            'email' => 'derrek@gmail.com',
            'password' => 'password4',
            'country' => 'Estados unidos',
            'twitter' => '@DerrekOW',
            'rol' => '1',
            'phone' => '6993212',
            'is_admin' => '0',
            'team_id' => 5
            ],

            [
            //JUGADOR5            
            'nickname' => 'Asuna',
            'name' => 'Peter',
            'lastname' => 'Mazuryk',
            'email' => 'asuna@gmail.com',
            'password' => 'password5',
            'country' => 'Estados Unidos',
            'twitter' => '@Asunaa',
            'rol' => '1',
            'phone' => '745699800',
            'is_admin' => '0',
            'team_id' => 5
            ],

            //ENTRENADOR2
            [            
            'nickname' => 'Mikes',
            'name' => 'Michael',
            'lastname' => 'Hockom',
            'email' => 'mikes@gmail.com',
            'password' => 'password6',
            'country' => 'Estados Unidos',
            'twitter' => '@MikesHD_',
            'rol' => '2',
            'phone' => '6321123',
            'is_admin' => '0',
            'team_id' => 5
            ],

            //MANAGER2
            [            
            'nickname' => 'ddk',
            'name' => 'Daniel',
            'lastname' => 'Kapadia',
            'email' => 'ddkesports@gmail.com',
            'password' => 'password7',
            'country' => 'Estados Unidos',
            'twitter' => '@ddkesports',
            'rol' => '3',
            'phone' => '696388945',
            'is_admin' => '0',
            'team_id' => 5
            ],
            //JUGADOR1
            [            
            'nickname' => 'koldamenta',
            'name' => 'Jose Luis',
            'lastname' => 'Aranguren',
            'email' => 'koldamenta@gmail.com',
            'password' => 'PASSWORD1',
            'country' => 'España',
            'twitter' => '@koldamenta',
            'rol' => '1',
            'phone' => '612457896',
            'is_admin' => '0',
            'team_id' => 6
            ],

            [
            //JUGADOR2            
            'nickname' => 'starxo',
            'name' => 'Patryk',
            'lastname' => 'Kopczynski',
            'email' => 'starxo5@gmail.com',
            'password' => 'PASSWORD2',
            'country' => 'Polonia',
            'twitter' => '@starxo5',
            'rol' => '1',
            'phone' => '722365478',
            'is_admin' => '0',
            'team_id' => 6
            ],

            [
            //JUGADOR3            
            'nickname' => 'sheydos',
            'name' => 'Bogdan',
            'lastname' => 'Naumov',
            'email' => 'sheydos@gmail.com',
            'password' => 'PASSWORD3',
            'country' => 'Rusia',
            'twitter' => '@Sheydosk1ng',
            'rol' => '1',
            'phone' => '741258963',
            'is_admin' => '0',
            'team_id' => 6
            ],

            [
            //JUGADOR4            
            'nickname' => 'trexx',
            'name' => 'Nikita',
            'lastname' => 'Chereidchenko',
            'email' => 'trexx@gmail.com',
            'password' => 'PASSWORD4',
            'country' => 'Rusia',
            'twitter' => '@trexxfps',
            'rol' => '1',
            'phone' => '769321456',
            'is_admin' => '0',
            'team_id' => 6
            ],

            [
            //JUGADOR5            
            'nickname' => 'Wolfen',
            'name' => 'Berkant',
            'lastname' => 'Joshkun',
            'email' => 'wolfen@gmail.com',
            'password' => 'PASSWORD5',
            'country' => 'Bulgaria',
            'twitter' => '@WolfenVAL',
            'rol' => '1',
            'phone' => '632123897',
            'is_admin' => '0',
            'team_id' => 6
            ],
            //ENTRENADOR3
            [            
            'nickname' => 'goked',
            'name' => 'Alex',
            'lastname' => 'Kie',
            'email' => 'goked@gmail.com',
            'password' => 'PASSWORD6',
            'country' => 'España',
            'twitter' => '@gokedTV',
            'rol' => '2',
            'phone' => '722412569',
            'is_admin' => '0',
            'team_id' => 6
            ],

            //MANAGER3
            [            
            'nickname' => 'BARBARR',
            'name' => 'André',
            'lastname' => 'Möller',
            'email' => 'barbarr@gmail.com',
            'password' => 'PASSWORD7',
            'country' => 'Suecia',
            'twitter' => '@BARBARRcs',
            'rol' => '3',
            'phone' => '744896354',
            'is_admin' => '0',
            'team_id' => 6
            ],

            [
            //USUARIOS NAVI
            //JUGADOR1            
            'nickname' => 'ANGE1',
            'name' => 'Kyrylo',
            'lastname' => 'Karasov',
            'email' => 'KyryloKarasov@gmail.com',
            'password' => '5454',
            'country' => 'Ucrania',
            'twitter' => '@officialange1',
            'rol' => '1',
            'phone' => '640196681',
            'is_admin' => '0',
            'team_id' => 1
            ],

            [
            //JUGADOR2            
            'nickname' => 'Shao',
            'name' => 'Andrey',
            'lastname' => 'Kiprsky',
            'email' => 'AndreyKirprsky@gmail.com',
            'password' => '4433',
            'country' => 'Rusia',
            'twitter' => '@Shaolele',
            'rol' => '1',
            'phone' => '640196682',
            'is_admin' => '0',
            'team_id' => 1
            ],

            [
            //JUGADOR3            
            'nickname' => 'Zyppan',
            'name' => 'Pontus',
            'lastname' => 'Eek',
            'email' => 'PontusEek@gmail.com',
            'password' => '3521',
            'country' => 'Suecia',
            'twitter' => '@zyppaan',
            'rol' => '1',
            'phone' => '640196683',
            'is_admin' => '0',
            'team_id' => 1
            ],

            [
            //JUGADOR4            
            'nickname' => 'SUYGETSU',
            'name' => 'Dmitry',
            'lastname' => 'Llyushin',
            'email' => 'DmitryLlyushin@gmail.com',
            'password' => '0909',
            'country' => 'Rusia',
            'twitter' => '@suygetsu_',
            'rol' => '1',
            'phone' => '640196684',
            'is_admin' => '0',
            'team_id' => 1
            ],

            [
            //JUGADOR5             
            'nickname' => 'cNed',
            'name' => 'Mehmet',
            'lastname' => 'Yağiz İpek',
            'email' => 'MehmetYağizİpek@gmail.com',
            'password' => '8778',
            'country' => 'Turquia',
            'twitter' => '@cNedf0r',
            'rol' => '0',
            'phone' => '679098057',
            'is_admin' => '0',
            'team_id' => 1
            ],
    

            //ENTRENADOR1
            [            
            'nickname' => 'd00mbr0s',
            'name' => 'Erik',
            'lastname' => 'Sandgren',
            'email' => 'ErikSandgren@gmail.com',
            'password' => '4435',
            'country' => 'Suecia',
            'twitter' => '@d00mbr0s',
            'rol' => '2',
            'phone' => '640196685',
            'is_admin' => '0',
            'team_id' => 1
            ],

            //MANAGER1
            [            
            'nickname' => 'LATEKS',
            'name' => 'Oliwer',
            'lastname' => 'Fahlander',
            'email' => 'Oliwer@gmail.com',
            'password' => '7234',
            'country' => 'Suecia',
            'twitter' => '@LATEKSgg',
            'rol' => '3',
            'phone' => '640196686',
            'is_admin' => '0',
            'team_id' => 1
            ],

            //USUARIOS TEAM HERETICS
            //JUGADOR1
            [            
            'nickname' => 'Mixwell',
            'name' => 'Oscar',
            'lastname' => 'Cañellas',
            'email' => 'mixwell@gmail.com',
            'password' => '6789',
            'country' => 'España',
            'twitter' => '@Mixwell',
            'rol' => '1',
            'phone' => '640196687',
            'is_admin' => '0',
            'team_id' => 2
            ],

            [
            //JUGADOR2            
            'nickname' => 'AvovA',
            'name' => 'Auni',
            'lastname' => 'Chahade',
            'email' => 'AvovA@gmail.com',
            'password' => '2593',
            'country' => 'Dinamarca',
            'twitter' => '@AvovaFPS',
            'rol' => '1',
            'phone' => '640196688',
            'is_admin' => '0',
            'team_id' => 2
            ],

            [
            //JUGADOR3            
            'nickname' => 'zeek',
            'name' => 'Aleksander',
            'lastname' => 'Zygmunt',
            'email' => 'zeek@gmail.com',
            'password' => '7813',
            'country' => 'Polonia',
            'twitter' => '@zeekrino',
            'rol' => '1',
            'phone' => '640196689',
            'is_admin' => '0',
            'team_id' => 2
            ],

            [            
            //JUGADOR4
            'nickname' => 'Boo',
            'name' => 'Ričardas',
            'lastname' => 'Lukaševičius',
            'email' => 'Boo@gmail.com',
            'password' => '0959',
            'country' => 'Lituania',
            'twitter' => '@BooVAL1',
            'rol' => '1',
            'phone' => '640196690',
            'is_admin' => '0',
            'team_id' => 2
            ],

            [
            //JUGADOR5
            'nickname' => 'keloqz',
            'name' => 'Cista',
            'lastname' => 'Wassim',
            'email' => 'keloqz@gmail.com',
            'password' => '1123',
            'country' => 'Francia',
            'twitter' => '@keloqz',
            'rol' => '0',
            'phone' => '679098085',
            'is_admin' => '0',
            'team_id' => 2
            ],
    

            //ENTRENADOR1
            [
            'nickname' => 'Neilzinho',
            'name' => 'Neil',
            'lastname' => 'Finlay',
            'email' => 'neilzinho@gmail.com',
            'password' => '12345678',
            'country' => 'Inglaterra',
            'twitter' => 'neilzinho',
            'rol' => '2',
            'phone' => '733988234',
            'is_admin' => '0',
            'team_id' => 2
            ],

            //MANAGER1
            [
            'nickname' => 'Ocelote',
            'name' => 'Carlos',
            'lastname' => 'Rodriguez',
            'email' => 'ocelote@gmail.com',
            'password' => '12345678',
            'country' => 'España',
            'twitter' => 'oceloteworld',
            'rol' => '3',
            'phone' => '632654789',
            'is_admin' => '0',
            'team_id' => 2
            ],

            //USUARIOS LEVIATAN
            //JUGADOR1
            [
            'nickname' => 'keznit',
            'name' => 'Angelo',
            'lastname' => 'Mori',
            'email' => 'keznit@gmail.com',
            'password' => '8967',
            'country' => 'Chile',
            'twitter' => '@keznitdeuS',
            'rol' => '1',
            'phone' => '640196691',
            'is_admin' => '0',
            'team_id' => 3
            ],

            [
            //JUGADOR2
            'nickname' => 'Tacolilla',
            'name' => 'Vicente',
            'lastname' => 'Compagnon',
            'email' => 'TacoTaco@gmail.com',
            'password' => '2103',
            'country' => 'Chile',
            'twitter' => '@tacolillalzh',
            'rol' => '1',
            'phone' => '640196691',
            'is_admin' => '0',
            'team_id' => 3
            ],

            [
            //JUGADOR3
            'nickname' => 'kiNgg',
            'name' => 'Francisco',
            'lastname' => 'Aravena',
            'email' => 'kiNgg@gmail.com',
            'password' => '8927',
            'country' => 'Chile',
            'twitter' => '@kiNggfps',
            'rol' => '1',
            'phone' => '640196692',
            'is_admin' => '0',
            'team_id' => 3
            ],

            [
            //JUGADOR4
            'nickname' => 'Mazino',
            'name' => 'Roberto',
            'lastname' => 'Rivas',
            'email' => 'MazinoFPS@gmail.com',
            'password' => '1990',
            'country' => 'Chile',
            'twitter' => '@Mazinofps',
            'rol' => '1',
            'phone' => '640196693',
            'is_admin' => '0',
            'team_id' => 3
            ],

            [
            //JUGADOR5 
            'nickname' => 'Shyy',
            'name' => 'Fabian',
            'lastname' => 'Usnayo',
            'email' => 'Shyy@gmail.com',
            'password' => '1548',
            'country' => 'Chile',
            'twitter' => '@ShyyFab',
            'rol' => '0',
            'phone' => '679098098',
            'is_admin' => '0',
            'team_id' => 3
            ],
    
            //ENTRENADOR1
            [
            'nickname' => 'Onur',
            'name' => 'Rodrigo',
            'lastname' => 'Dalmagro',
            'email' => 'Onur@gmail.com',
            'password' => '1233',
            'country' => 'Argentina',
            'twitter' => 'onurthegreat',
            'rol' => '2',
            'phone' => '733988234',
            'is_admin' => '0',
            'team_id' => 3
            ],

            //MANAGER1
            [
            'nickname' => 'torito',
            'name' => 'Cristobal',
            'lastname' => 'Quintana',
            'email' => 'torito@gmail.com',
            'password' => '5630',
            'country' => 'Tailandia',
            'twitter' => 'toritoravalero',
            'rol' => '3',
            'phone' => '634654782',
            'is_admin' => '0',
            'team_id' => 3
            ],
        ]);
      }
  }