<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catastrofe extends Model
{
    protected $fillable = [
        'user_id',
        'region',
        'comuna',
        'tipo_catastrofe',
    ];

    public function user(){
    	return $this ->belongTo('app\User');
    }

    public function medida(){
    	return $this ->hasMany('app\Medida');
    }

    public function comuna(){

        return $this->belongsTo('app\Comuna');
    }
}
