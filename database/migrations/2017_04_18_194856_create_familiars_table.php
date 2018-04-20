<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familiar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users');
            $table->integer('relacion');
            $table->string('titulo');
            $table->string('firstName');
            $table->string('secondName');
            $table->string('firstLastName');
            $table->string('secondLastName');
            $table->string('telefono');
            $table->string('celular');
            $table->string('direccion');
            $table->string('email');
            $table->string('giro');
            $table->string('puesto');
            $table->string('empresa');
            $table->boolean('isAlive');
            $table->boolean('isEgresado');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('familiar');
    }
}
