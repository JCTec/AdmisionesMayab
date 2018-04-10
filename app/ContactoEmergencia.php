<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactoEmergencia extends Model
{
    protected $table = 'contacto_emergencias';

    protected $primaryKey = 'id_user';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    public $incrementing = false;

}
