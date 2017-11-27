<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participa extends Model
{
       protected $fillable = [
        'nombre',
        'apellido',
        'rut',
        'email',
        'user_id',
        'medida_id',

    ];



    public function medida(){


    	return $this->belongsTo('App\Medida');
    }

    public function user(){

    	return $this->belongsTo('App\User');
    }
}
