@extends('layouts.app')
@section('content')

<section class="container-fluid ">
  <a href="{{route('medidas.busqueda',$evento->medida->catastrove_id)}}" class="btn btn-info mb-3">Volver</a>
  <div class="row border border-primary p-3 mb-2 bg-light text-dark w-50">
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
      <p>Region: {{$evento->comuna->region->nombre}}</p>
      <p>Comuna: {{$evento->comuna->nombre}}</p>
      <p>Direccion: {{$evento->direccion}}</p>
      <p>Fecha Inicio: {{$evento->medida->fecha_inicio}}</p>
      <p>Fecha Termino: {{$evento->medida->fecha_termino}}</p>
    </div>
    <a class="btn btn-primary" href="{{route('participa.create',$evento->medida->id)}}"> Participar</a>
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
            <form role="form" method="POST" action="{{route('comentario.store',$evento->medida->id)}}">
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


</section>



@stop
