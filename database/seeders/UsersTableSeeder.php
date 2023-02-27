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
        ]);
      }
  }
    

