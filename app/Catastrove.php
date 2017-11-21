<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catastrove extends Model
{
    protected $fillable = [
        'user_id',
        'region_id',
        'descripcion',
        'titulo',
        'comuna_id',
        'tipoCatastrove_id',
    ];

    public function user(){
    	return $this ->belongTo('app\User');
    }

    public function medida(){
    	return $this ->hasMany('app\Medida');
    }

    public function comuna(){

        return $this->belongsTo('App\Comuna');
    }
    public function tipoC(){
      return $this->belongsTo('App\Tipo_catastrove');
    }
}
