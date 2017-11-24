@extends('layouts.app')
@section('content')

<section class="container-fluid border border-primary p-3 mb-2 bg-light text-dark w-50">
  <div class="row">
    <div class="col-md-12">
      <h2>Evento a Beneficio</h2>
    </div>
    <div class="col-md-12">
      <h3>Meta del Evento:</h3>
      <p>{{$meta}}</p>
    </div>
    <div class="col-md-12">
      <h3>Dinero recolectado:</h3>
      <p>{{$recolectado}}</p>
    </div>
    <div class="col-md-12">
      <h3>Descripcion:</h3>
      <p>{{$descripcion}}</p>
    </div>
    <div class="col-md-12">
      <h3>Datos Eventos:</h3>
      <h4>Region:</h4>
      <p>{{$region}}</p>
      <h4>Comuna:</h4>
      <p>{{$comuna}}</p>
      <h4>Direccion:</h4>
      <p>{{$direccion}}</p>
      <h4>Fecha Inicio:</h4>
      <p>{{$fecha_i}}</p>
      <h4>Fecha Termino:</h4>
      <p>{{$fecha_f}}</p>
    </div>

  </div>



</section>
