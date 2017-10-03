<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
                        'firstName',
                        'lastName',
                        'rut',
                        'email',
                        'password',
                        'rol',
                        'region',
                        'comuna',
                        'direccion',
                        'estado',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function historiales(){
        return $this -> hasMany('app\Historia');
    }

    public function miembro(){
        return $this -> hasOne('app\Organization_user');
    }

    public function catastrofes(){
        return $this -> hasMany('App\catastrofe');
    }

    
}
