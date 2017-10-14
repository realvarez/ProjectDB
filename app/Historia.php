<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    protected $fillable = [
    			'user_id',
    			'tipo_cambio',
    			'tabla',
    			'estado_antiguo',
    			'estado_nuevo',
    			'fecha_accion',
    ];

    public function persona(){
    	return $this -> belongsTo('app\User');
    }
}
