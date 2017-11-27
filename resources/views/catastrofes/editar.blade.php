@extends('layouts.app')
@section('content')

<section class="container mt-5"><br>
  <div class="row">
    <div class="col">
      <div class="form-area">

        <form role="form" method="POST" action="{{route('catastrofes.update',$catastrofe->id)}}">
          {{ csrf_field() }}
          {{method_field('PUT')}}
          <h3 style="margin-bottom: 25px; text-align: center;">Ingresar Catastrofe</h3>
            <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo"  value="{{$catastrofe->titulo}}" placeholder="Titulo" required>
             </div>

          <div class="form-group">
            <label>Seleccione el tipo de Catastrofe:</label>
            <p>Region actual: {{$catastrofe->tipo_catastrove->tipo}}</p>
            {!! Form::select('tipo_id',[''=>'--- Selecciona Tipo Catastrofe ---']+$tipo,$catastrofe->tipo_catastrove->id,['class'=>'form-control']) !!}
          </div>

          <div class="form-group">
            <label>Seleccione la Region:</label>
            <p>Region actual: {{$catastrofe->comuna->region->nombre}}</p>
            {!! Form::select('region_id',[''=>'--- Selecciona Region ---']+$regiones,null,['class'=>'form-control']) !!}
          </div>

          <div class="form-group">
            <label>Seleccione la Comuna:</label>
            <p>Comuna actual: {{$catastrofe->comuna->nombre}}</p>
            {!! Form::select('comuna_id',[''=>'--- Selecciona Comuna ---'],null,['class'=>'form-control']) !!}
          </div>

          <div class="form-group">
            <label>Descripcion :</label>
            <textarea class="form-control" type="textarea" id="descripcion" value="$catastrofe->descripcion" name="descripcion" placeholder="Escribe aqui una breve descripcion"  rows="7">{{$catastrofe->descripcion}}</textarea>
            <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
          </div>

          <div class="form-group">
            <button type="submit" id="submit" name="submit" class="btn btn-success">Crear</button>
          </div>

        </form>



      </div>
    </div>
  </div>
  <a href="/catastrofes" class="btn-primary">Volver</a>


</section>

@stop
