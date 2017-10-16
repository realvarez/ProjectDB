<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apoyo extends Model
{
      protected $fillable = [
        'user_id',
        'rut',
        'medida_id',      
    ];
    
}
