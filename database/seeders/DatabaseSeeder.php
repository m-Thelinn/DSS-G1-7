<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Llamamos a otro fichero de semillas
        $this->call( Team ::class );
        // Mostramos información por consola
        //$this->command->info('User table seeded!' );
        $this->call( User ::class );
        //$this->call( Game ::class );
    }
}
