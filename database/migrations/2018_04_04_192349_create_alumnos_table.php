<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('firstName')->nullable();
            $table->string('secondName')->nullable();
            $table->string('firstLastName')->nullable();
            $table->string('secondLastName')->nullable();
            $table->string('finalEmail')->nullable();
            $table->integer('year')->nullable();
            $table->integer('month')->nullable();
            $table->integer('day')->nullable();
            $table->char('sex')->nullable();
            $table->integer('preparatorias')->nullable()->unsigned();
            $table->string('otraPreparatoria')->nullable();
            $table->string('carrera')->nullable();
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
            $table->string('postal')->nullable();
            $table->string('direccion')->nullable();
            $table->string('city')->nullable();
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('alumnos');
    }
}
