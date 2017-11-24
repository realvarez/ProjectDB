<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aporte extends Model
{
  protected $fillable = [
     'recoleccion_id',
     'nombre',
     'numCuenta',
     'requeridos',
     'recolectados',

 ];

 public function recoleccion(){
   return $this->belongsTo('App\Recoleccion')
 }

}
