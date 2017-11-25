@extends('layouts.app')
@section('content')


<section class="container-fluid border border-primary p-3 mb-2 bg-light text-dark w-50 color1 ">
  <div class="row">
    <div class="col-md-12">
      <h3>Solicitud De Voluntarios</h2>
    </div>
    <div class="col-md-12">
      <p>Meta Volntarios :{{$voluntario->metaVoluntarios}}</p>
    </div>
    <div class="col-md-12">
      <p>Voluntarios Actuales: {{$voluntario->voluntariosActuales}}</p>
    </div>
    <div class="col-md-12">
      <h4>Descripcion:</h4>
      <p>{{$voluntario->medida->descripcion}}</p>
    </div>
    <div class="col-md-12">
      <h4>Datos Eventos:</h4>
      <p>Region: {{$voluntario->comuna->region->nombre}}</p>
      <p>Comuna: {{$voluntario->comuna->nombre}}</p>
      <p>Direccion: {{$voluntario->direccion}}</p>
      <p>Fecha Inicio: {{$voluntario->medida->fecha_inicio}}</p>
      <p>Fecha Termino: {{$voluntario->medida->fecha_Termino}}</p>
    </div>

    <div class="col">
      <button type="submit" id="submit" name="submit" class="btn btn-success">Participar</button>

    </div>


  </div>



</section>
@stop
