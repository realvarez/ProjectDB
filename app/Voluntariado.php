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
}
