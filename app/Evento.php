<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
    protected $fillable = [
      'metaDinero',
      'actualDinero',
      'comuna_id',
      'direccion'
    ];

    public function medida(){
      return $this->morphMany('App\Medida','MorphMedida');
    }


    public function comuna(){

        return $this->belongsTo('App\Comuna');
    }
}
