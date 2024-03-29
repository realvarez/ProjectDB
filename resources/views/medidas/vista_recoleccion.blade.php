@extends('layouts.app')
@section('content')

<section class="container-fluid  ">
  <a href="{{route('medidas.busqueda',$recoleccion->medida->catastrove_id)}}" class="btn btn-info mb-3">Volver</a>
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
    <form role="form" method="POST" action="{{route('recoleccion.cooperacion',$recoleccion->id)}}">
     {{ csrf_field() }}
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

      <td><input type="number" class="form-control" id="titulo" name="aportes[]" min="1" ></td>
    </tr>
    @endforeach
  </tbody>
</table>
<label for="Email">Email</label>
<input type="email" class="form-control" id="id_medida" name ="email" required placeholder="email">
<button type="submit" id="submit" name="submit" class="btn btn-success">Enviar</button>
</form>
  </div>

</div>

<div class="row d-flex justify-content-center">

  <div class="col-md-8 bg-light border border-light">
      <h4>Comentarios</h4>
      @foreach($comentario as $c)
      <div class="">
          <div class="card">
            <div class="card-header">
              {{$c->user->nombre}}
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>{{$c->comentario}}</p>
                <p>{{$c->created_at}}</p>
              </blockquote>
            </div>
          </div>
      </div>
      @endforeach
      <div class="mt-3">
          <form role="form" method="POST" action="{{route('comentario.store',$recoleccion->medida->id)}}">
     {{ csrf_field() }}
          <div class="form-group">
            <label for="comentario">Ingresa tu Comentario</label>
            <textarea class="form-control" id="comentario" name="comentario" rows="3"></textarea>
          </div>
          <button type="submit" id="submit" name="submit" class="btn btn-success">Comentar</button>
        </form>

      </div>
  </div>

</div>
<a href="{{route('medidas.busqueda',$recoleccion->medida->catastrove_id)}}" class="btn btn-info mb-3">Volver</a>

</section>
@stop
