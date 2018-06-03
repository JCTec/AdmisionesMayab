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
            $table->integer('idUser')->unsigned()->unique();
            $table->integer('tutor')->nullable()->unsigned();
            $table->string('firstName');
            $table->string('secondName')->nullable();
            $table->string('firstLastName');
            $table->string('secondLastName');
            $table->string('finalEmail')->unique();
            $table->integer('year');
            $table->integer('month');
            $table->integer('day');
            $table->char('sex');
            $table->integer('preparatoria')->unsigned();
            $table->string('otraPreparatoria')->nullable();
            $table->string('carrera');
            $table->string('telefono');
            $table->string('celular');
            $table->string('postal');
            $table->string('direccion');
            $table->string('city');
            $table->foreign('idUser')->references('id')->on('users');
            $table->foreign('tutor')->references('id')->on('familiar');
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
        Schema::dropIfExists('alumnos');
    }
}
