<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Funciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('funciones',function(bluePrint $table){
            $table->increments('id');
            $table->Integer('id_pelicula')->unsigned();
            $table->foreign('id_pelicula')->references('id')->on('peliculas');
            $table->string('Fecha');
            $table->Integer('id_promo')->unsigned();
            $table->foreign('id_promo')->references('id')->on('promociones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('funciones');
    }
}
