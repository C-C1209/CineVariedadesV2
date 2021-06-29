<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Eventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('eventos',function(BluePrint $table){
            $table->increments('id');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->timestamp('Fecha')->nullable();
            $table->string('Evento');
            $table->integer('id_funcion')->unsigned();
            $table->foreign('id_funcion')->references('id')->on('funciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('eventos');
    }
}
