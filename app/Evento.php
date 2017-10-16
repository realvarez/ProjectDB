<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
    protected $fillable = [
      'metaDinero',
      'actualDinero',
      'region',
      'comuna',
      'direccion'
    ];

    public function medida(){
      return $this->morphMany('App\medida',medidas);
    }
}
