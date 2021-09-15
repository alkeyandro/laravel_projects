<?php

namespace Database\Seeders;

use App\Models\Idioma;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class IdiomaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        for ($i = 0; $i < 5; $i++) {
            Idioma::create([
                "idioma"=>$faker->countryCode()
                /*
                locale // en_UK
				countryCode // UK
				languageCode // en
                */
            ]);
        }
    }
}
