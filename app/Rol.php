<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    
    protected $fillable=[   	
    ];



    public function users(){


    	return $this->hasMany('app\User');
    }
}
