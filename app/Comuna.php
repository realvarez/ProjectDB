<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    protected $fillable= [
    	'region_id',
    	'nombre',
    ];


    public function user(){

    	return $this->hasMany('App\User');
    }

    public function region(){

    	return $this->belongsTo('App\Region');
    }

    public function catastrofes(){

    	return $this->hasMany('App\Catastrofe');
    }

    public function voluntariado(){

        return $this->hasMany('App\Voluntariado');
    }

    public function evento(){

        return $this->hasMany('App\Evento');
    }

    public function recoleccion(){


        return $this->hasMany('App\Recoleccion');
    }


    




}
