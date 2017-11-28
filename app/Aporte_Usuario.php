<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aporte_Usuario extends Model
{
  protected $fillable = [
     'id_usuario',
     'id_aporte',

     'cantidad',
     'email',

 ];

 public function aporte(){
   return $this->hasMany('App\Aporte');
 }

 public function usuario(){
   return $this->hasMany('App\User');
 }
}
