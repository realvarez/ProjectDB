<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medida extends Model{

    protected $fillable = [
    	'user_id',
    	'admin_id',
    	'organization_id',
    	'catastrofe_id',
    	'avance',
    	'tipo_medida',
    	'descripcion',
    	'estado',
    	'fecha_inicio',
    	'fecha_termino',
    ];

    public function MorphMedida(){
      return $this->morphTo();
    }

    public function creador(){
    	return $this -> belongsTo('app\User');
    }

    public function administrador(){
    	return $this -> belongsTo('app\User');
    }

    public function organizacion(){
    	return $this -> belongsTo('app\Organization');
    }

    public function catastrofe(){
    	return $this ->belongto('app\Catastrofe');
    }
}
