<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrientacionVocacional extends Model
{
    protected $table = 'orientacion_vocacionals';

    protected $primaryKey = 'id';

    protected $fillable = [
        'idUser', 'conQuienVives','quienPagaTusEstudios','situacionPadres','areaBachillerato','estudioEnExtranjero',
        'lugarEstudioExtranjero','mejorMateria','peorMateria','materiaFavorita','materiaDisgusto','examenesExtraordinarios',
        'cualExamenExtraordinario','razonExamenExtraordinario','reprobarSemestre','cualReprobarSemestre','razonReprobarSemestre',
        'universidadPrevia','razonUniversidadPrevia','trabajoPrevio','puestoTrabajoPrevio','experienciaLaboralElegirCarrera',
        'razonExperienciaLaboralElegirCarrera','trabajoActual','razonTrabajoActual','empresaTrabajoActual','añosTrabajoActual',
        'mesesTrabajoActual','horarioTrabajoActual','considerarSaludable','necesitaAsistencia','tipoAsistenciaNecesitada',
        'necesitaExamenesNoEscritos','tipoDeExamenNecesitado','problemaContinuoSalud','tipoProblemaContinuoSalud','terapiaRecibida',
        'tipoDeTerapiaRecibida','razonDeTerapiaRecibida',
    ];

    public $incrementing = true;
}
