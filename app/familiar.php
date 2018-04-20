<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class familiar extends Model
{
    protected $table = 'familiar';

    protected $primaryKey = 'id';

    protected $fillable = [
        'idUser','relacion','titulo','firstName','secondName','firstLastName','secondLastName','telefono','celular','direccion','email','giro','puesto','empresa','isAlive','isEgresado','active'
    ];

    public $incrementing = true;

}
