<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposito extends Model
{
    //
    protected $fillable = [

      'user_id',
      'medida_id',
      'rut',
      'cantidad',
      'fechaDeposito',
      'documento',
    ];

    public function User(){
      $this-> belongsTo('app\User');
    }

    public function Deposito(){

      $this->belongsTo('app\Apoyo_economico');

    }
}
