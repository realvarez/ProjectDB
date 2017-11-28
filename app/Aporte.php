<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aporte extends Model
{
  protected $fillable = [
     'recoleccion_id',
     'nombre',

     'requeridos',
     'recolectados',

 ];

 public function recoleccion(){
   return $this->belongsTo('App\Recoleccion');
 }

 public function aporte_usuario(){
   return $this->belongsTo('App\Aporte_Usuario');
 }

}
