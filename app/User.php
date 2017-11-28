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
        'region',
        'comuna_id',
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
        return $this -> hasMany('App\Historia');
    }

    public function miembro(){
        return $this -> hasOne('App\Organization_user');
    }

    public function catastrofes(){
        return $this -> hasMany('App\Catastrofe');
    }


    public function depositos(){
      return $this -> hasMany('App\Deposito');
    }

    public function comentarios(){
      return $this -> hasMany('App\Comentario');
    }

  public function comuna(){

    return $this->belongsTo('App\Comuna');
}

public function rol(){

    return $this->belongsTo('App\Rol');
}


public function rnv(){

    return $this->hasOne('App\rnv');

}

public function Aporte_Usuario(){
  return $this->belongsTo('App\Aporte_Usuario');
}




}
