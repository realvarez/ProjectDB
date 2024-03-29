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

 public function aportes_usuario(){
   return $this->belongsTo('App\Aportes_usuario');
 }

}
