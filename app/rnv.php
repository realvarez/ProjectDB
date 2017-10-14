<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rnv extends Model
{
    protected $fillable=[

    	'user_id',
    	'ultima_medida',
    	'rut',
    	'nombre',
    	'correo',


    ];


    public function user(){


    	return $this->belongsTo('app\User');
    }
    
}
