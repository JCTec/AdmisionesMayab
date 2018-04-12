<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preparatoria extends Model
{
    protected $table = 'preparatorias';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name'
    ];

    public $incrementing = true;

    public $timestamps = false;
}
