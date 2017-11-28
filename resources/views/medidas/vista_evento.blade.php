@extends('layouts.app')
@section('content')

<section class="container-fluid ">
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
