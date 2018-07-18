<?php

namespace App;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $table = 'users';

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function files(){
        return $this->hasMany(Fileentries::class,'idUser','id');
    }

    public function alumno(){
        return $this->hasOne(Alumno::class,'idUser','id');
    }

    public function transaction(){
        return $this->hasOne(Transaction::class,'idUser','id');
    }

    public function familiares(){
        return $this->hasMany(familiar::class,'idUser','id');
    }

    public function ov(){
        return $this->hasOne(OrientacionVocacional::class,'idUser','id');
    }

    public function idiomas(){
        return $this->hasMany(Idioma::class,'idUser','id');
    }

    public function brothers(){
        return $this->hasMany(Brother::class,'idUser','id');
    }
}
