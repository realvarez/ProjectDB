<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recoleccion extends Model
{
    protected $fillable= [

    	
    	
    	'region',
    	'comuna',
    	'direccion',
    	
      ];


      public function medida(){
        return $this->morphMany('App\Medida','MorphMedida');
      }


      public function comuna(){

        return $this->belongsTo('App\Comuna');
      }


      public function aporte()
      {
        return $this->hasMany('App\Aporte');
      }


}
