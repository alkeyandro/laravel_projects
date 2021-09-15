<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelicula;
use Faker\Factory as Faker;

class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        
        for ($i = 0; $i < 10; $i++) {
            Pelicula::create([
                "nombre"=>$faker->name(),
                "id_categoria"=>$faker->numberBetween(1,10),
                "id_idioma"=>$faker->numberBetween(1,10),
                "sipnosis"=>$faker->text(200)
            ]);
        };

        /*DB::insert("INSERT INTO peliculas (nombre,caratula,id_categoria,id_idioma,sipnosis) VALUES (?,?,?,?,?)");*/

        /*
        DB::$table("peliculas")->insert([
        	"nombre"->"Pelicula",
        	"id_Categoria"->1,
        	"id_idioma"->1,
        	"sipnosis"->"Pelicula"
        ]);
        */

        /*App\Models\Pelicula::create([
        	'pelicula'->'Pelicula'
        ]);*/

        /*Pelicula::created([
        	'nombre'->'Pelicula',
        	'id_Categoria'->1,
        	'id_idioma'->1,
        	'sipnosis'->'Pelicula'
        ]);*/

    }
}
