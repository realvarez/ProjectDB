<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntariado extends Model
{
    protected $fillable= [

    	'metaVoluntarios',
    	'voluntariosActuales',
    	'duracionDias',
    	'region',
    	'comuna',
    	'direccion',

    ];
<<<<<<< HEAD

    public function medida(){
      return $this->morphMany('App\medida',medidas);
    }
=======
>>>>>>> master
}
