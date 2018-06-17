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
        'universidadPrevia','razonUniversidadPrevia',
    ];

    public $incrementing = true;
}
