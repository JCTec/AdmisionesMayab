<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorialAcademico extends Model
{
    protected $table = 'historial_academico';

    protected $primaryKey = 'id';

    protected $fillable = [
        'idUser','grado', 'nombre', 'ciudad', 'promedio'
    ];

    public $incrementing = true;
}
