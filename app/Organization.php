<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
    	'nombre',
    	'logo',
    	'descripcion',
    ];

    public function miembros(){
        return $this -> hasMany('App\Organization_user');
    }
    public function medida(){
        return $this -> hasMany('App\Medida');
    }
}
