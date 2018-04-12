<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactoEmergencia extends Model
{
    protected $table = 'contacto_emergencias';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    public $incrementing = true;

}
