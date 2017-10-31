<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
      protected $fillable = [
    	'medida_id',
    	'descripcion',

    ];





    public function apoyoeconomico(){


    	return $this->belongsTo('app\Apoyo_economico');
    }


}
