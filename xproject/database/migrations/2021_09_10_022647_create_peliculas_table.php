<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            //$table->string('caratula');
            $table->bigInteger('id_categoria');
            $table->bigInteger('id_idioma');
            $table->text('sipnosis');
            $table->timestamps();

            //$table->foreign('id_categoria')->references('id')->on('categorias');
            //$table->foreign('id_idioma')->references('id')->on('idiomas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_peliculas');
    }
}
