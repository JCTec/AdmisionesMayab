<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrientacionVocacional extends Model
{
    protected $table = 'orientacion_vocacionals';

    protected $primaryKey = 'id_user';

    protected $fillable = [
        'id_user',
    ];

    public $incrementing = false;
}
