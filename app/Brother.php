<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brother extends Model
{
    protected $table = 'brothers';

    protected $primaryKey = 'id';

    protected $fillable = [
        'idUser', 'nombre','sex','edad','trabajoEstudio'
    ];

    public $incrementing = true;
}
