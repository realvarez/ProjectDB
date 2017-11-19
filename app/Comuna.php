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

    	return $this->hasMany('app\User');
    }

    public function region(){

    	return $this->belongsTo('app\Region');
    }

    public function catastrofes(){

    	return $this->hasMany('App\Catastrofe');
    }


}
