@extends('layouts.app')
@section('content')

<section class="container-fluid  ">
  <div class="row d-flex justify-content-center">
    <div class="col-md-5 card mr-3  border border-primary">


          <h3>Recoleccion de Insumos</h3>
          <h4>Descripcion:</h4>
          <p>{{$recoleccion->medida->descripcion}}</p>
          <h4>Datos Eventos:</h4>
          <p>Region: {{ $recoleccion->comuna->region->nombre}}</p>
          <p>Comuna: {{ $recoleccion->comuna->nombre}}</p>
          <p>Direccion: {{$recoleccion->direccion}}</p>
          <p>Fecha Inicio: {{ $recoleccion->medida->fecha_inicio}}</p>
          <p>Fecha Termino: {{ $recoleccion->medida->fecha_termino}}</p>



      </div>



  <div class="col-md-5 card border  bt border-primary">
    <form role="form" method="POST" action="{{route('deposito.create')}}">
    <h3>Lista De Elementos</h3>
    <table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">Elemento</th>
      <th scope="col">Cantidad Actual</th>
      <th scope="col">Cantidad Requerida</th>
      <th scope="col">Cantidad a Dornar</th>
    </tr>
  </thead>
  <tbody>
    @foreach($recoleccion->aporte as $aporte)
    <tr>
      <th scope="row">{{$aporte->nombre}}</th>
      <td>{{$aporte->recolectado}}</td>
      <td>{{$aporte->requeridos}}</td>

      <td><input type="number" class="form-control" id="titulo" name="monto" min="1" ></td>
    </tr>
    @endforeach
  </tbody>
</table>
<input type="email" class="form-control" id="id_medida" name ="email" required placeholder="email">
<button type="submit" id="submit" name="submit" class="btn btn-success">Enviar</button>
</form>
  </div>

</div>

<div class="row d-flex justify-content-center">

  <div class="col-md-8 bg-light border border-light">
      <h4>Comentarios</h4>
      <div class="">
          <div class="card">
            <div class="card-header">
              Nombre Usuario
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>comentario</p>
                <p>fecha de publicacion</p>
              </blockquote>
            </div>
          </div>
      </div>
      <div class="mt-3">
        <form class="" action="index.html" method="post">
          <div class="form-group">
            <label for="comentario">Ingresa tu Comentario</label>
            <textarea class="form-control" id="comentario" name="comentario" rows="3"></textarea>
          </div>
          <button type="submit" id="submit" name="submit" class="btn btn-success">Comentar</button>
        </form>

      </div>
  </div>

</div>


</section>
@stop
