<?php

namespace Database\Seeders;

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

        $this->call([
        	PeliculaSeeder::class,
        	IdiomaSeeder::class,
        	CategoriaSeeder::class
        ]);

        //$this->call(PeliculaSeeder::class);
        //$this->call(CategoriaSeeder::class);
        //$this->call(IdiomaSeeder::class);
    }
}
