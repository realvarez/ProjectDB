<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apoyoeconomico extends Model
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

    public function depositos(){

    	return $this->hasMany('app\Deposito');
    }

    public function gastos(){

    	return $this->hasMany('app\Gasto');
    }
    



}
