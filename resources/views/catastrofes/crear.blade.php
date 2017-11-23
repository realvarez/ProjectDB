@extends('layouts.app')
@section('content')
<section class="container mt-5"><br>
  <div class="row">
    <div class="col">
      <div class="form-area">

        
        {!! Form::open(array('route' => 'testeo', 'class' => 'form')) !!}

          <h3 style="margin-bottom: 25px; text-align: center;">Crear Catastrofe</h3>
            <div class="form-group">
            <label for="titulo">titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" required>
             </div>

          <div class="form-group">
            <label>Select Country:</label>
            {!! Form::select('region_id',[''=>'--- Selecciona Region ---']+$regiones,null,['class'=>'form-control']) !!}
          </div>

          <div class="form-group">
            <label>Select State:</label>
            {!! Form::select('comuna_id',[''=>'--- Selecciona Comuna2 ---'],null,['class'=>'form-control']) !!}
          </div>

          <div class="form-group">
            <label>Select State:</label>
            <textarea class="form-control" type="textarea" id="descripcion" name="descripcion" placeholder="Message"  rows="7"></textarea>
            <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
          </div>

          <div class="form-group">
            <button type="submit" id="submit" name="submit" class="btn btn-success">Crear</button>
          </div>

        {!! Form::close() !!}



      </div>
    </div>
  </div>
  <a href="/catastrofes" class="btn-primary">Volver</a>
  

</section>

