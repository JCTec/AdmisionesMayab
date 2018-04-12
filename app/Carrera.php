<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carreras';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name'
    ];

    public $incrementing = true;

    public $timestamps = false;
}
