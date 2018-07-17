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
        Schema::create('orientacion_vocacional', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser')->unsigned()->unique();
            $table->boolean('active')->default(true);
            $table->foreign('idUser')->references('id')->on('users');
            $table->string('conQuienVives')->nullable();
            $table->string('quienPagaTusEstudios')->nullable();
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
            $table->boolean('trabajoPrevio')->nullable();
            $table->string('puestoTrabajoPrevio')->nullable();
            $table->boolean('experienciaLaboralElegirCarrera')->nullable();
            $table->string('razonExperienciaLaboralElegirCarrera')->nullable();
            $table->boolean('trabajoActual')->nullable();
            $table->string('razonTrabajoActual')->nullable();
            $table->string('empresaTrabajoActual')->nullable();
            $table->string('añosTrabajoActual')->nullable();
            $table->string('mesesTrabajoActual')->nullable();
            $table->string('horarioTrabajoActual')->nullable();
            $table->boolean('considerarSaludable')->nullable();
            $table->boolean('necesitaAsistencia')->nullable();
            $table->string('tipoAsistenciaNecesitada')->nullable();
            $table->boolean('necesitaExamenesNoEscritos')->nullable();
            $table->string('tipoDeExamenNecesitado')->nullable();
            $table->boolean('problemaContinuoSalud')->nullable();
            $table->string('tipoProblemaContinuoSalud')->nullable();
            $table->boolean('terapiaRecibida')->nullable();
            $table->string('tipoDeTerapiaRecibida')->nullable();
            $table->string('razonDeTerapiaRecibida')->nullable();
            $table->text('descripcionFamilia')->nullable();
            $table->text('mejorRelacionFamiliar')->nullable();
            $table->text('cambioEnFamilia')->nullable();
            $table->text('admirarPersonalidadPadre')->nullable();
            $table->text('defectosPersonalidadPadre')->nullable();
            $table->text('platicarProblemasConPadre')->nullable();
            $table->text('admirarPersonalidadMadre')->nullable();
            $table->text('defectosPersonalidadMadre')->nullable();
            $table->text('platicarProblemasConMadre')->nullable();
            $table->text('relacionConHermanos')->nullable();
            $table->string('pasatiempos')->nullable();
            $table->boolean('practicaDeporte')->nullable();
            $table->string('cualPracticaDeporte')->nullable();
            $table->boolean('organizacionAyudaSocial')->nullable();
            $table->string('cualOrganizacionAyudaSocial')->nullable();
            $table->boolean('directivoGrupo')->nullable();
            $table->string('cualDirectivoGrupo')->nullable();
            $table->boolean('actividadCultural')->nullable();
            $table->string('cualActividadCultural')->nullable();
            $table->boolean('gustoLectura')->nullable();
            $table->string('cualLectura')->nullable();
            $table->string('frecuenciaLectura')->nullable();
            $table->boolean('usaRedesSociales')->nullable();
            $table->string('cualRedesSociales')->nullable();
            $table->string('cualExperienciaOrganizaciones')->nullable();
            $table->boolean('finished')->default(false);
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
        Schema::dropIfExists('orientacion_vocacional');
    }
}
