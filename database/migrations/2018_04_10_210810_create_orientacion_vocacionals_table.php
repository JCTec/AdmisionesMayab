<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrientacionVocacionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orientacion_vocacionals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser')->unsigned()->unique();
            $table->boolean('active')->default(true);
            $table->foreign('idUser')->references('id')->on('users');
            $table->integer('conQuienVives')->nullable();
            $table->integer('quienPagaTusEstudios')->nullable();
            $table->string('situacionPadres')->nullable();
            $table->string('areaBachillerato')->nullable();
            $table->boolean('estudioEnExtranjero')->nullable();
            $table->string('lugarEstudioExtranjero')->nullable();
            $table->string('mejorMateria')->nullable();
            $table->string('peorMateria')->nullable();
            $table->string('materiaFavorita')->nullable();
            $table->string('materiaDisgusto')->nullable();
            $table->boolean('examenesExtraordinarios')->nullable();
            $table->string('cualExamenExtraordinario')->nullable();
            $table->string('razonExamenExtraordinario')->nullable();
            $table->boolean('reprobarSemestre')->nullable();
            $table->string('cualReprobarSemestre')->nullable();
            $table->string('razonReprobarSemestre')->nullable();
            $table->boolean('universidadPrevia')->nullable();
            $table->string('razonUniversidadPrevia')->nullable();
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
        Schema::dropIfExists('orientacion_vocacionals');
    }
}
