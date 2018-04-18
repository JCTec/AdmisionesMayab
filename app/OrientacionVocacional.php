<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrientacionVocacional extends Model
{
    protected $table = 'orientacion_vocacionals';

    protected $primaryKey = 'id';

    protected $fillable = [
        'idUser',
    ];

    public $incrementing = true;
}
