@extends('layouts.app')
@section('content')


<section class="container-fluid ">
  <div class="row d-flex justify-content-start ">
    <div class=" col-md-6 bg-light card my-3 mx-2  border border-primary">
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

    <div class="col-md-5">
      <div class="">

      </div>
      <h4>Imagen </h4>

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
        <form role="form" method="POST" action="{{route('comentario.store',$voluntario->medida->id)}}">
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
