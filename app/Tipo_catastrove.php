<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_catastrove extends Model
{
  protected $fillable=[

    'tipo'
  ];

  public function catastrove(){

    return $this->hasMany('App\Catastrove');
  }
}
