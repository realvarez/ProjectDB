<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $fillable = [
                        'nombre',
                        'apellido',
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
        return $this -> hasMany('app\Catastrofe');
    }


    public function depositos(){
      return $this -> hasMany('app\Deposito');
     }

     public function comuna(){

        return $this->belongsTo('app\Comuna');
     }

     public function rol(){

        return $this->belongsTo('app\Rol');
     }


     public function rnv(){

        return $this->hasOne('app\rnv');

     }




}
