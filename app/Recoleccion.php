<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recoleccion extends Model
{
    protected $fillable= [

    	'metaRecoleccion',
    	'recoleccionActual',
    	'region',
    	'comuna',
    	'direccion',
    	'tipoRecoleccion',
      ];


      public function medida(){
        return $this->morphMany('App\Medida','MorphMedida');
      }


      public function comuna(){

        return $this->belongsTo('App\Comuna');
      }


      

}
