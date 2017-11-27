<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization_user extends Model
{
    protected $fillable = [
    	'organization_id',
    	'user_id',
    	'rol',
    ];

    public function usuario(){
    	return $this ->belongsTo('App\User');
    }

    public function organization(){
    	return $this ->belongsTo('App\Organization');
    }
}
