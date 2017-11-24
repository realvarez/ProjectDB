<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntariado extends Model
{
    protected $fillable= [

    	'metaVoluntarios',
    	'voluntariosActuales',
    	'duracionDias',
    	'comuna_id',
    	'direccion',

    ];

    public function medida(){
      return $this->morphOne('App\Medida','MorphMedida');
    }



    public function comuna(){

        return $this->belongsTo('App\Comuna');
    }
}
