<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    
    protected $fillable=[
    	"nombre",
    ];



    public function users(){


    	return $this->hasMany('app\User');
    }
}
