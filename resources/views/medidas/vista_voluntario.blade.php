@extends('layouts.app')
@section('content')


<section class="container-fluid border border-primary p-3 mb-2 bg-light text-dark w-50 color1 ">
  <div class="row row d-flex justify-content-center">
    <div class=" col-md-5 card mr-3  border border-primary">
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


        <button type="submit" id="submit" name="submit" class="btn btn-success">Participar</button>


    </div>
    <div class="col-md-5 card border  bt border-primary">
      <form role="form" method="POST" action="{{route('eventos.store')}}">
        {{ csrf_field() }}
        <br style="clear:both">
        <h3 style="margin-bottom: 25px; text-align: center;">Registro de Voluntario</h3>
        <div class="form-group">
          <label for="titulo">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su Nombre" required>
        </div>
        <div class="form-group">
          <label for="Descripcion">Apellido</label>
          <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su Apellido" required>
        </div>
        <div class="form-group">
          <label for="titulo">Email</label>
          <input type="emailr" class="form-control" id="mail" min="1" name="mail" placeholder="Ingrese su email" required>
        </div>

        <div class="form-group">
          <label for="titulo">rut</label>
          <input type="number" class="form-control" id="rut" min="0" name="rut" placeholder="indique su rut sin - ni ." required>
        </div>
        <div class="form-group">
          <label>Seleccione la Region:</label>
          {!! Form::select('region_id',[''=>'--- Selecciona Region ---']+$regiones,null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          <label>Seleccione la Comuna:</label>
          {!! Form::select('comuna_id',[''=>'--- Selecciona Comuna ---'],null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Direccion</label>
          <input type="text" class="form-control" id="dir" name="Direccion" placeholder="Indique la Direccion " required>

        </div>
        <div class="form-group">
          <label class="control-label" for="registration-date">Fecha Nacimiento</label>
          <div class="input-group registration-date-time">
            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
            <input class="form-control" name="fecha_nacimiento" id="theDate" type="date">
          </div>
        </div>



        <button type="submit" id="submit" name="submit" class="btn btn-success">Enviar</button>

      </form>

    </div>

</div>

  </div>



</section>
@stop
