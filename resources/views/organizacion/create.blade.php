@extends('layouts.admin')
@section('content')

<div class="col-md-8 ml-5 center">
{{-- Formulario Creacion de Organizacíon --}}
	<div class="form-area">
        {!! Form::open(array('route' => 'testeo', 'class' => 'form')) !!}
          {{ csrf_field() }}
          <h3 style="margin-bottom: 25px; text-align: center;">Crear Organizacíon</h3>
            <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Organizacíon" required>
             </div>

           <div class="form-group">
                <label>File input</label>
                <input type="file" name="imagen" >
                <p class="help-block">Subir imagen</p>
            </div>

          <div class="form-group">
            <label>Descripcion :</label>
            <textarea class="form-control" type="textarea" id="descripcion" name="descripcion" placeholder="Escribe aqui una breve descripcion"  rows="7"></textarea>
            <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
          </div>

          <div class="form-group">
            <button type="submit" id="submit" name="submit" class="btn btn-success">Crear</button>
          </div>

        {!! Form::close() !!}



      </div>

</div>


@stop
