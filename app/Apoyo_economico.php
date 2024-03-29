<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apoyo_economico extends Model
{


     protected $fillable = [
        'metaMinima',
        'actual',
        'numCuenta',
        'tipoCuenta',
        'bancoCuenta',
        'titularCuenta',
        'correoCuenta',

    ];

    public function medida(){
      return $this->morphOne('App\Medida','MorphMedida');
    }

    public function depositos(){

    	return $this->hasMany('App\Deposito');
    }

    public function gastos(){

    	return $this->hasMany('App\Gasto');
    }





}
