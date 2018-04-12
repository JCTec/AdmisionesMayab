<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id_user', 'firstName', 'secondName','firstLastName','secondLastName','finalEmail','year','month','day','sex','preparatorias','otraPreparatoria','carrera','telefono','celular','postal','direccion','city',
    ];

    public $incrementing = true;

}
