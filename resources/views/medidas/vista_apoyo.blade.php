@extends('layouts.app')
@section('content')


<section class="container-fluid border border-primary p-3 mb-2 bg-light text-dark w-50">
  <div class="row">
    <div class="col-md-12">
      <h3>Apoyo Economico</h3>
    </div>
    <div class="col-md-12">
      <h4>Meta del Evento:</h4>
      <p>{{$apoyo->metaMinima}}</p>
    </div>
    <div class="col-md-12">
      <h4>Dinero recolectado:</h4>
      <p>{{$apoyo->actual}}</p>
    </div>
    <div class="col-md-12">
      <h4>Descripcion:</h4>
      <p>{{$apoyo->medida->descripcion}}</p>
    </div>
    <div class="col-md-6">
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
          <input type="text" class="form-control" id="nombre" name ="nombre" id  required>
        </div>
        <div>
          <label for="titulo2 ">Apellido</label>
          <input type="text" class="form-control" id="apellido" name ="apellido"  required>
        </div>
        <div>
          <label for="titulo2 ">Email</label>
          <input type="email" class="form-control" id="email" name ="email" id  required>
        </div>

         <div>
          <label for="titulo2 ">Rut</label>
          <input type="text" class="form-control" id="rut" name ="rut" id  required>
        </div>
        
        <div class="form-group">
          <label for="titulo">Cantidad</label>
          <input type="number" class="form-control" id="titulo" name="monto" min="1" required>
        </div>
      

        <button type="submit" id="submit" name="submit" class="btn btn-success">Enviar</button>
      </form>
    </div>

  </div>

  


</section>

@stop
