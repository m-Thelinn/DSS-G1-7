<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Team;

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
            //USUARIOS FNATIC
            //JUGADOR1            
            'nickname' => 'admin',
            'name' => 'admin',
            'lastname' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin1234',
            'country' => 'Spain',
            'rol' => 0,
            'phone' => '667876234',
            'team_id' => DB::table('teams')->where('name','Sin equipo')->first()->id
            ],
            [
            //USUARIOS FNATIC
            //JUGADOR1            
            'nickname' => 'Leo',
            'name' => 'Leo',
            'lastname' => 'Jannesson',
            'email' => 'LeoJannesson@gmail.com',
            'password' => '9785',
            'country' => 'Suecia',
            'rol' => 1,
            'phone' => '667876234',
            'team_id' => DB::table('teams')->where('name','FNATIC')->first()->id
            ],

            [
            //JUGADOR2            
            'nickname' => 'Chronicle',
            'name' => 'Timofey',
            'lastname' => 'Khromov',
            'email' => 'chronicle@gmail.com',
            'password' => '4432',
            'country' => 'Rusia',
            'rol' => 1,
            'phone' => '678980990',
            'team_id' => DB::table('teams')->where('name','FNATIC')->first()->id 
            ],

            [
            //JUGADOR3            
            'nickname' => 'Derke',
            'name' => 'Nikita',
            'lastname' => 'Sirmitev',
            'email' => 'derke@gmail.com',
            'password' => '6540',
            'country' => 'Finlandia',
            'rol' => 1,
            'phone' => '754345987',
            'team_id' => DB::table('teams')->where('name','FNATIC')->first()->id
            ],

            [
            //JUGADOR4            
            'nickname' => 'Boaster',
            'name' => 'Jake',
            'lastname' => 'Howlett',
            'email' => 'boaster@gmail.com',
            'password' => '0909',
            'country' => 'Reino Unido',
            'rol' => 1,
            'phone' => '765222123',
            'team_id' => DB::table('teams')->where('name','FNATIC')->first()->id
            ],

            [
            //JUGADOR5            
            'nickname' => 'Alfajer',
            'name' => 'Emir',
            'lastname' => 'Ali Beder',
            'email' => 'alfajer@gmail.com',
            'password' => '8877',
            'country' => 'Turquia',
            'rol' => 1,
            'phone' => '679098087',
            'team_id' => DB::table('teams')->where('name','FNATIC')->first()->id 
            ],
    

            //ENTRENADOR1
            [            
            'nickname' => 'Mini',
            'name' => 'Jacob',
            'lastname' => 'Harris',
            'email' => 'mini@gmail.com',
            'password' => '7743',
            'country' => 'Reino Unido',
            'rol' => 2,
            'phone' => '733988234',
            'team_id' => DB::table('teams')->where('name','FNATIC')->first()->id
            ],

            //MANAGER1
            [            
            'nickname' => 'CoJo',
            'name' => 'Colin',
            'lastname' => 'Johnson',
            'email' => 'CoJo@gmail.com',
            'password' => '4471',
            'country' => 'Reino Unido',
            'rol' => 3,
            'phone' => '784321456',
            'team_id' => DB::table('teams')->where('name','FNATIC')->first()->id
            ],

            //USUARIOS 100T
            [
            //JUGADOR1            
            'nickname' => 'stellar',
            'name' => 'Brenden',
            'lastname' => 'McGrath',
            'email' => 'stellar@gmail.com',
            'password' => 'password1',
            'country' => 'Estados unidos',
            'rol' => 1,
            'phone' => '745652123',
            'team_id' => DB::table('teams')->where('name','100 Thieves')->first()->id 
            ],

            [
            //JUGADOR2            
            'nickname' => 'bang',
            'name' => 'Sean',
            'lastname' => 'Bezerra',
            'email' => 'bangzerra@gmail.com',
            'password' => 'password2',
            'country' => 'Estados unidos',
            'rol' => 1,
            'phone' => '741569897',
            'team_id' => DB::table('teams')->where('name','100 Thieves')->first()->id 
            ],

            [
            //JUGADOR3             
            'nickname' => 'Cryocells',
            'name' => 'Matthew',
            'lastname' => 'Panganiban',
            'email' => 'cryocells@gmail.com',
            'password' => 'password3',
            'country' => 'Estados unidos',
            'rol' => 1,
            'phone' => '648989731',
            'team_id' => DB::table('teams')->where('name','100 Thieves')->first()->id 
            ],

            [
            //JUGADOR4            
            'nickname' => 'Derrek',
            'name' => 'Derrek',
            'lastname' => 'Ha',
            'email' => 'derrek@gmail.com',
            'password' => 'password4',
            'country' => 'Estados unidos',
            'rol' => 1,
            'phone' => '6993212',
            'team_id' => DB::table('teams')->where('name','100 Thieves')->first()->id 
            ],

            [
            //JUGADOR5            
            'nickname' => 'Asuna',
            'name' => 'Peter',
            'lastname' => 'Mazuryk',
            'email' => 'asuna@gmail.com',
            'password' => 'password5',
            'country' => 'Estados Unidos',
            'rol' => 1,
            'phone' => '745699800',
            'team_id' => DB::table('teams')->where('name','100 Thieves')->first()->id 
            ],

            //ENTRENADOR2
            [            
            'nickname' => 'Mikes',
            'name' => 'Michael',
            'lastname' => 'Hockom',
            'email' => 'mikes@gmail.com',
            'password' => 'password6',
            'country' => 'Estados Unidos',
            'rol' => 2,
            'phone' => '6321123',
            'team_id' => DB::table('teams')->where('name','100 Thieves')->first()->id 
            ],

            //MANAGER2
            [            
            'nickname' => 'ddk',
            'name' => 'Daniel',
            'lastname' => 'Kapadia',
            'email' => 'ddkesports@gmail.com',
            'password' => 'password7',
            'country' => 'Estados Unidos',
            'rol' => 2,
            'phone' => '696388945',
            'team_id' => DB::table('teams')->where('name','100 Thieves')->first()->id  
            ],

            //USUARIOS KOI
            //JUGADOR1
            [            
            'nickname' => 'koldamenta',
            'name' => 'Jose Luis',
            'lastname' => 'Aranguren',
            'email' => 'koldamenta@gmail.com',
            'password' => 'PASSWORD1',
            'country' => 'España',
            'rol' => 1,
            'phone' => '612457896',
            'team_id' => DB::table('teams')->where('name','KOI')->first()->id 
            ],

            [
            //JUGADOR2            
            'nickname' => 'starxo',
            'name' => 'Patryk',
            'lastname' => 'Kopczynski',
            'email' => 'starxo5@gmail.com',
            'password' => 'PASSWORD2',
            'country' => 'Polonia',
            'rol' => 1,
            'phone' => '612457895',
            'team_id' => DB::table('teams')->where('name','KOI')->first()->id 
            ],

            [
            //JUGADOR3            
            'nickname' => 'sheydos',
            'name' => 'Bogdan',
            'lastname' => 'Naumov',
            'email' => 'sheydos@gmail.com',
            'password' => 'PASSWORD3',
            'country' => 'Rusia',
            'rol' => 1,
            'phone' => '741258963',
            'team_id' => DB::table('teams')->where('name','KOI')->first()->id 
            ],

            [
            //JUGADOR4            
            'nickname' => 'trexx',
            'name' => 'Nikita',
            'lastname' => 'Chereidchenko',
            'email' => 'trexx@gmail.com',
            'password' => 'PASSWORD4',
            'country' => 'Rusia',
            'rol' => 1,
            'phone' => '769321456',
            'team_id' => DB::table('teams')->where('name','KOI')->first()->id 
            ],

            [
            //JUGADOR5            
            'nickname' => 'Wolfen',
            'name' => 'Berkant',
            'lastname' => 'Joshkun',
            'email' => 'wolfen@gmail.com',
            'password' => 'PASSWORD5',
            'country' => 'Bulgaria',
            'rol' => 1,
            'phone' => '632123897',
            'team_id' => DB::table('teams')->where('name','KOI')->first()->id 
            ],
            //ENTRENADOR3
            [            
            'nickname' => 'goked',
            'name' => 'Alex',
            'lastname' => 'Kie',
            'email' => 'goked@gmail.com',
            'password' => 'PASSWORD6',
            'country' => 'España',
            'rol' => 2,
            'phone' => '722412569',
            'team_id' => DB::table('teams')->where('name','KOI')->first()->id 
            ],

            //MANAGER3
            [            
            'nickname' => 'BARBARR',
            'name' => 'André',
            'lastname' => 'Möller',
            'email' => 'barbarr@gmail.com',
            'password' => 'PASSWORD7',
            'country' => 'Suecia',
            'rol' => 3,
            'phone' => '744896354',
            'team_id' => DB::table('teams')->where('name','KOI')->first()->id 
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
            'rol' => 1,
            'phone' => '640196681',
            'team_id' => DB::table('teams')->where('name','Natus Vincere')->first()->id 
            ],

            [
            //JUGADOR2            
            'nickname' => 'Shao',
            'name' => 'Andrey',
            'lastname' => 'Kiprsky',
            'email' => 'AndreyKirprsky@gmail.com',
            'password' => '4433',
            'country' => 'Rusia',
            'rol' => 1,
            'phone' => '640196682',
            'team_id' => DB::table('teams')->where('name','Natus Vincere')->first()->id 
            ],

            [
            //JUGADOR3            
            'nickname' => 'Zyppan',
            'name' => 'Pontus',
            'lastname' => 'Eek',
            'email' => 'PontusEek@gmail.com',
            'password' => '3521',
            'country' => 'Suecia',
            'rol' => 1,
            'phone' => '640196683',
            'team_id' => DB::table('teams')->where('name','Natus Vincere')->first()->id 
            ],

            [
            //JUGADOR4            
            'nickname' => 'SUYGETSU',
            'name' => 'Dmitry',
            'lastname' => 'Llyushin',
            'email' => 'DmitryLlyushin@gmail.com',
            'password' => '0909',
            'country' => 'Rusia',
            'rol' => 1,
            'phone' => '640196684',
            'team_id' => DB::table('teams')->where('name','Natus Vincere')->first()->id 
            ],

            [
            //JUGADOR5             
            'nickname' => 'cNed',
            'name' => 'Mehmet',
            'lastname' => 'Yağiz İpek',
            'email' => 'MehmetYağizİpek@gmail.com',
            'password' => '8778',
            'country' => 'Turquia',
            'rol' => 1,
            'phone' => '679098057',
            'team_id' => DB::table('teams')->where('name','Natus Vincere')->first()->id 
            ],
    

            //ENTRENADOR1
            [            
            'nickname' => 'd00mbr0s',
            'name' => 'Erik',
            'lastname' => 'Sandgren',
            'email' => 'ErikSandgren@gmail.com',
            'password' => '4435',
            'country' => 'Suecia',
            'rol' => 1,
            'phone' => '640196685',
            'team_id' => DB::table('teams')->where('name','Natus Vincere')->first()->id 
            ],

            //MANAGER1
            [            
            'nickname' => 'LATEKS',
            'name' => 'Oliwer',
            'lastname' => 'Fahlander',
            'email' => 'Oliwer@gmail.com',
            'password' => '7234',
            'country' => 'Suecia',
            'rol' => 3,
            'phone' => '640196686',
            'team_id' => DB::table('teams')->where('name','Natus Vincere')->first()->id 
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
            'rol' => 1,
            'phone' => '640196687',
            'team_id' => DB::table('teams')->where('name','Team Heretics')->first()->id 
            ],

            [
            //JUGADOR2            
            'nickname' => 'AvovA',
            'name' => 'Auni',
            'lastname' => 'Chahade',
            'email' => 'AvovA@gmail.com',
            'password' => '2593',
            'country' => 'Dinamarca',
            'rol' => 1,
            'phone' => '640196688',
            'team_id' => DB::table('teams')->where('name','Team Heretics')->first()->id 
            ],

            [
            //JUGADOR3            
            'nickname' => 'zeek',
            'name' => 'Aleksander',
            'lastname' => 'Zygmunt',
            'email' => 'zeek@gmail.com',
            'password' => '7813',
            'country' => 'Polonia',
            'rol' => 1,
            'phone' => '640196689',
            'team_id' => DB::table('teams')->where('name','Team Heretics')->first()->id 
            ],

            [            
            //JUGADOR4
            'nickname' => 'Boo',
            'name' => 'Ričardas',
            'lastname' => 'Lukaševičius',
            'email' => 'Boo@gmail.com',
            'password' => '0959',
            'country' => 'Lituania',
            'rol' => 1,
            'phone' => '640196690',
            'team_id' => DB::table('teams')->where('name','Team Heretics')->first()->id 
            ],

            [
            //JUGADOR5
            'nickname' => 'keloqz',
            'name' => 'Cista',
            'lastname' => 'Wassim',
            'email' => 'keloqz@gmail.com',
            'password' => '1123',
            'country' => 'Francia',
            'rol' => 1,
            'phone' => '679098085',
            'team_id' => DB::table('teams')->where('name','Team Heretics')->first()->id 
            ],
    

            //ENTRENADOR1
            [
            'nickname' => 'Neilzinho',
            'name' => 'Neil',
            'lastname' => 'Finlay',
            'email' => 'neilzinho@gmail.com',
            'password' => '12345678',
            'country' => 'Inglaterra',
            'rol' => 1,
            'phone' => '733988234',
            'team_id' => DB::table('teams')->where('name','Team Heretics')->first()->id 
            ],

            //MANAGER1
            [
            'nickname' => 'Ocelote',
            'name' => 'Carlos',
            'lastname' => 'Rodriguez',
            'email' => 'ocelote@gmail.com',
            'password' => '12345678',
            'country' => 'España',
            'rol' => 3,
            'phone' => '632654789',
            'team_id' => DB::table('teams')->where('name','Team Heretics')->first()->id 
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
            'rol' => 1,
            'phone' => '640196691',
            'team_id' => DB::table('teams')->where('name','Leviatán')->first()->id 
            ],

            [
            //JUGADOR2
            'nickname' => 'Tacolilla',
            'name' => 'Vicente',
            'lastname' => 'Compagnon',
            'email' => 'TacoTaco@gmail.com',
            'password' => '2103',
            'country' => 'Chile',
            'rol' => 1,
            'phone' => '640196691',
            'team_id' => DB::table('teams')->where('name','Leviatán')->first()->id
            ],

            [
            //JUGADOR3
            'nickname' => 'kiNgg',
            'name' => 'Francisco',
            'lastname' => 'Aravena',
            'email' => 'kiNgg@gmail.com',
            'password' => '8927',
            'country' => 'Chile',
            'rol' => 1,
            'phone' => '640196692',
            'team_id' => DB::table('teams')->where('name','Leviatán')->first()->id  
            ],

            [
            //JUGADOR4
            'nickname' => 'Mazino',
            'name' => 'Roberto',
            'lastname' => 'Rivas',
            'email' => 'MazinoFPS@gmail.com',
            'password' => '1990',
            'country' => 'Chile',
            'rol' => 1,
            'phone' => '640196693',
            'team_id' => DB::table('teams')->where('name','Leviatán')->first()->id 
            ],

            [
            //JUGADOR5 
            'nickname' => 'Shyy',
            'name' => 'Fabian',
            'lastname' => 'Usnayo',
            'email' => 'Shyy@gmail.com',
            'password' => '1548',
            'country' => 'Chile',
            'rol' => 1,
            'phone' => '679098098',
            'team_id' => DB::table('teams')->where('name','Leviatán')->first()->id 
            ],
    
            //ENTRENADOR1
            [
            'nickname' => 'Onur',
            'name' => 'Rodrigo',
            'lastname' => 'Dalmagro',
            'email' => 'Onur@gmail.com',
            'password' => '1233',
            'country' => 'Argentina',
            'rol' => 2,
            'phone' => '733988234',
            'team_id' => DB::table('teams')->where('name','Leviatán')->first()->id 
            ],

            //MANAGER1
            [
            'nickname' => 'torito',
            'name' => 'Cristobal',
            'lastname' => 'Quintana',
            'email' => 'torito@gmail.com',
            'password' => '5630',
            'country' => 'Tailandia',
            'rol' => 3,
            'phone' => '634654782',
            'team_id' => DB::table('teams')->where('name','Leviatán')->first()->id 
            ],
        ]);
      }
  }