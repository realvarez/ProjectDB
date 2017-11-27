@extends('layouts.app')
@section('content')


<section class="container-fluid border border-primary p-3 mb-2 bg-light text-dark w-50 color1 ">
  <div class="row d-flex justify-content-center">
    <div class=" col card mr-3  border border-primary">
      <h3>Solicitud De Voluntarios</h2>
      <p>Meta Volntarios: {{$voluntario->metaVoluntarios}}</p>
      <p>Voluntarios Actuales: {{$voluntario->voluntariosActuales}}</p>
      <h4>Descripcion:</h4>
      <p>{{$voluntario->medida->descripcion}}</p>
      <h4>Datos Eventos:</h4>
      <p>Region: {{$voluntario->comuna->region->nombre}}</p>
      <p>Comuna: {{$voluntario->comuna->nombre}}</p>
      <p>Direccion: {{$voluntario->direccion}}</p>
      <p>Fecha Inicio: {{$voluntario->medida->fecha_inicio}}</p>
      <p>Fecha Termino: {{$voluntario->medida->fecha_termino}}</p>


 <a class="btn btn-primary" href="{{route('participa.create',$voluntario->medida->id)}}"> Participar</a>

    </div>


</div>





</section>
@stop
