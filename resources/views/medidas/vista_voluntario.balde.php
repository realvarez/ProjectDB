@extends('layouts.app')
@section('content')


<section class="container-fluid border border-primary p-3 mb-2 bg-light text-dark w-50">
  <div class="row">
    <div class="col-md-12">
      <h2>Solicitud De Voluntarios</h2>
    </div>
    <div class="col-md-12">
      <h3>Meta de Voluntarios:</h3>
      <p>{{$voluntario->metaVoluntarios}}</p>
    </div>
    <div class="col-md-12">
      <h3>Voluntarios Actuales:</h3>
      <p>{{$voluntario->voluntariosActuales}}</p>
    </div>
    <div class="col-md-12">
      <h3>Descripcion:</h3>
      <p>{{$voluntario->meidida->descripcion}}</p>
    </div>
    <div class="col-md-12">
      <h3>Datos Eventos:</h3>
      <h4>Region</h4>
      <p>$voluntario->comuna->region->nombre</p>
      <h4>Comuna:</h4>
      <p>$voluntario->comuna->nombre</p>
      <h4>Direccion:</h4>
      <p>{{$voluntario->direccion}}</p>
      <h4>Fecha Inicio:</h4>
      <p>{{$voluntario->medida->fecha_inicio}}</p>
      <h4>Fecha Termino:</h4>
      <p>{{$voluntario->medida->fecha_Termino}}</p>
    </div>

    <div class="col">
      <button type="submit" id="submit" name="submit" class="btn btn-success">Participar</button>

    </div>


  </div>



</section>
