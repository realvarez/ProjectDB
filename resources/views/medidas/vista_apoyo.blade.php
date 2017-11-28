@extends('layouts.app')
@section('content')


<section class="container-fluid ">
  <a href="{{route('medidas.busqueda',$apoyo->medida->catastrove_id)}}" class="btn btn-info mb-3">Volver</a>
  <div class="row m-3 d-flex justify-content-center">
    <div class="col-md-5 card border border-primary">
      <h3>Apoyo Economico</h3>
      <h4>Meta del Evento:</h4>
      <p>{{$apoyo->metaMinima}}</p>
      <h4>Dinero recolectado:</h4>
      <p>{{$apoyo->actual}}</p>
      <h4>Datos Eventos:</h4>
      <p>Banco: {{$apoyo->bancoCuenta}}</p>
      <p>Tipo de Cuenta: {{$apoyo->TipoCuenta}}</p>
      <p>Numero de Cuenta: {{$apoyo->numCuenta}}</p>
      <p>Titular: {{$apoyo->titularCuenta}}</p>
      <p>Correo: {{$apoyo->correoCuenta}}</p>
      <p>Fecha Inicio: {{$apoyo->medida->fecha_inicio}}</p>
      <p>Fecha Termino: {{$apoyo->medida->fecha_termino}}</p>
      <p>ID medida: {{$apoyo->id}}</p>

    </div>
    <div class="col-md-6">
      <form role="form" method="POST" action="{{route('deposito.store',$apoyo->medida->id)}}">
        {{ csrf_field() }}
        <br style="clear:both">
        <h3 style="margin-bottom: 25px; text-align: center;">Donar</h3>
        <div>
          <label for="titulo2 ">Nombre</label>
          <input type="text" class="form-control" id="nombre" name ="nombre"  required>
        </div>
        <div>

         <div>
          <label for="titulo2 ">Rut</label>
          <input type="text" class="form-control" id="nombre" name ="rut"  required>
        </div>
        <div>

          <label for="titulo2 ">Apellido</label>
          <input type="text" class="form-control" id="apellido" name ="apellido"  required>
        </div>
        <div>
          <label for="titulo2 ">Email</label>
          <input type="email" class="form-control" id="email" name ="email"  required>
        </div>


        <div class="form-group">
          <label for="titulo">Cantidad</label>
          <input type="number" class="form-control" id="titulo" name="monto" min="1" required>
        </div>

      <button type="submit" id="submit" name="submit" class="btn btn-success">Enviar</button>
      </form>
    </div>

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
            <form role="form" method="POST" action="{{route('comentario.store',$apoyo->medida->id)}}">
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
