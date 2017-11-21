<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCatastrove extends Model
{
  protected $fillable=[

    'tipo'
  ];

  public function catastroves(){

    return $this->hasMany('App\Catastrove');
  }
}
