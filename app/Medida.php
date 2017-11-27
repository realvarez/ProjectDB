<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medida extends Model{

    protected $fillable = [
    	'user_id',
    	'admin_id',
    	'organization_id',
    	'catastrove_id',
    	'avance',
    	'tipo_medida',
    	'descripcion',
    	'estado',
    	'fecha_inicio',
    	'fecha_termino',
        'titulo',
    ];

    public function MorphMedida(){
      return $this->morphTo();
    }

    public function creador(){
    	return $this -> belongsTo('App\User');
    }

    public function administrador(){
    	return $this -> belongsTo('App\User');
    }

    public function organization(){
    	return $this -> belongsTo('App\Organization');
    }

    public function catastrofe(){
    	return $this ->belongto('App\Catastrofe');
    }
}
