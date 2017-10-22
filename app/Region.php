<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable=[

<<<<<<< HEAD
    	'nombre';
=======
    	'nombre',
>>>>>>> 07e9222251e562379181d127d05098bac64c12e0


    ];


    public function comunas(){


    	return $this->hasMany('app\Comuna');
    }
}
