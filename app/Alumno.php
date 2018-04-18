<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';

    protected $primaryKey = 'id';

    protected $fillable = [
        'idUser', 'firstName', 'secondName','firstLastName','secondLastName','finalEmail','year','month','day','sex','preparatorias','otraPreparatoria','carrera','telefono','celular','postal','direccion','city',
    ];

    public $incrementing = true;

}
