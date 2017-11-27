<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable= [
    	'user_id',
    	'medida_id',
    	'comentario',
    ];

    public function usuario(){

    	return $this->belongsTo('App\User');
    }
    public function medida(){

    	return $this->belongsTo('App\Medida');
    }
}
