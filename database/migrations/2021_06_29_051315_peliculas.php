<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Peliculas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('peliculas',function(BluePrint $table){
            $table->increments('id');
            $table->string('Nombre');
            $table->string('Idioma');
            $table->string('Subtitulos');
            $table->string('Director');
            $table->string('Fecha');
            $table->string('Descripcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('peliculas');
    }
}
