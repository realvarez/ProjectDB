@extends('layouts.app')
@section('content')


<section class="container mt-5">
  <div class="row">
    <div class="col">
      <div class="form-area">
        <form role="form" method="POST" action="{{route('voluntarios.store')}}">
          {{ csrf_field() }}
          <br style="clear:both">
          <h3 style="margin-bottom: 25px; text-align: center;">Crear Medida Voluntariado</h3>
          <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="Titulo" placeholder="Descripcion" required>
          </div>
          <div class="form-group">
            <label for="Descripcion">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="Descripcion" placeholder="Descripcion" required>
          </div>
          <div class="form-group">
            <label for="titulo">Meta Voluntario</label>
            <input type="number" class="form-control" id="number" name="Meta" placeholder="Cantidad requeriada de Voluntarios" required>
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


          <button type="submit" id="submit" name="submit" class="btn btn-success">Enviar</button>

        </form>

      </div>
    </div>
  </div>






  <a href="/catastrofes" class="btn-primary">Volver</a>

</section>
@stop
