<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            //JUGADOR
            'id' => '0', 
            'nick' => 'M1xwell',
            'nombre' => 'Oscar',
            'apellidos' => 'Cañellas',
            'email' => 'm1xwell@gmail.com',
            'password' => '1234',
            'dni' => '01234567M',
            'pais' => 'España',
            'twitter' => 'm1xwell',
            'rol' => '0',
            'telefono' => '654321987',
            'is_admin' => '0'
            ],
            
            //ENTRENADOR
            [
            'id' => '1',
            'nick' => 'Neilzinho',
            'nombre' => 'Neil',
            'apellidos' => 'Finlay',
            'email' => 'neilzinho@gmail.com',
            'password' => '5678',
            'dni' => '9876543N',
            'pais' => 'Inglaterra',
            'twitter' => 'neilzinho',
            'rol' => '2',
            'telefono' => '733988234',
            'is_admin' => '1'
            ],

            //MANAGER
            [
            'id' => '2',
            'nick' => 'Ocelote',
            'nombre' => 'Carlos',
            'apellidos' => 'Rodriguez',
            'email' => 'ocelote@gmail.com',
            'password' => '7766',
            'dni' => '1122334N',
            'pais' => 'España',
            'twitter' => 'oceloteworld',
            'rol' => '2',
            'telefono' => '632654789',
            'is_admin' => '0'
            ],
        ]);
      }
  }
    

