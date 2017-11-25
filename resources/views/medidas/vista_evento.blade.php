@extends('layouts.app')
@section('content')

<section class="container-fluid border border-primary p-3 mb-2 bg-light text-dark w-50">
  <div class="row">
    <div class="col-md-12">
      <h3>Evento a Beneficio</h3>
    </div>
    <div class="col-md-12">
      <h4>Meta del Evento:</h4>
      <p>{{$evento->metaDinero}}</p>
    </div>
    <div class="col-md-12">
      <h4>Dinero recolectado:</h4>
      <p>{{$evento->actualDinero}}</p>
    </div>
    <div class="col-md-12">
      <h4>Descripcion:</h4>
      <p>{{$evento->medida->descripcion}}</p>
    </div>
    <div class="col-md-12">
      <h4>Datos Eventos:</h4>
      <p>{{Region: $evento->comuna->region->nombre}}</p>
      <p>{{Comuna: $evento->comuna->nombre}}</p>
      <p>{{Direccion: $evento->direccion}}</p>
      <p>{{Fecha Inicio: $evento->medida->fecha_inicio}}</p>
      <p>{{Fecha Termino: $evento->medida->fecha_termino}}</p>
    </div>

  </div>



</section>



@stop
