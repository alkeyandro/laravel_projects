<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use Faker\Factory as Faker;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        for ($i = 0; $i < 3; $i++) {
            Categoria::create([
                "categoria"=>$faker->unique->word()
                //realText(rand(10, 11))
            ]);
        }
    }
}
