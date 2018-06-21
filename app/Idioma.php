<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $table = 'idiomas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'idUser', 'idioma','leer','traduce','habla','escribe'
    ];

    public $incrementing = true;
}
