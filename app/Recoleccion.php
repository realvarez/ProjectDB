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
<<<<<<< HEAD
      ];


      public function medida(){
        return $this->morphMany('App\medida',medidas);
      }




=======


    ];
>>>>>>> master
}
