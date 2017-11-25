@extends('layouts.app')
@section('content')

<section class="container-fluid  ">
  <div class="row d-flex justify-content-center">
    <div class="col-md-5 card mr-3  border border-primary">


          <h3>Recoleccion de Insumos</h3>
          <h4>Descripcion:</h4>
          <p>{{$recoleccion->medida->descripcion}}</p>
          <h4>Datos Eventos:</h4>
          <p>Region: Por ahora vacio</p>
          <p>Comuna:{{ $recoleccion->comuna_id}}</p>
          <p>Direccion:{{ $recoleccion->direccion}}</p>
          <p>Fecha Inicio:{{ $recoleccion->medida->fecha_inicio}}</p>
          <p>Fecha Termino:{{ $recoleccion->medida->fecha_termino}}</p>



      </div>



  <div class="col-md-5 card border  bt border-primary">
    <h3>Lista De Elementos</h3>
    <table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">Elemento</th>
      <th scope="col">Cantidad Actual</th>
      <th scope="col">Cantidad Requerida</th>
    </tr>
  </thead>
  <tbody>
    @foreach($recoleccion->aporte as $aporte)
    <tr>
      <th scope="row">{{$aporte->nombre}}</th>
      <td>{{$aporte->recolectado}}</td>
      <td>{{$aporte->requeridos}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
  </div>

</div>


</section>
@stop
