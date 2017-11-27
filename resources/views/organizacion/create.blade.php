@extends('layouts.admin')
@section('content')

<div class="col-md-8 ml-5 center">
{{-- Formulario Creacion de Organizacíon --}}
	<div class="form-area">
      <form action="{{ route('organizaciones.store') }}" method="POST" enctype="multipart/form-data">
       {{csrf_field()}}


          <h3 style="margin-bottom: 25px; text-align: center;">Crear Organizacíon</h3>

            <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Organizacíon" required>
             </div>

           <div class="form-group">
                <label>Logo de la Organizacion:</label>
                <input type="file" name="logo" required>
                {!! $errors->first('logo', '<span class=error>:message</span>') !!}
            </div>

          <div class="form-group">
            <label>Descripcion :</label>
            <textarea class="form-control" type="textarea" id="descripcion" name="descripcion" placeholder="Escribe aqui una breve descripcion de que trata la organizacíon"  rows="7" required></textarea>
          </div>

          <div class="form-group offset-md-8 ">
            <button type="submit" id="submit" name="submit" class="btn btn-success">Crear Organizacion</button>
            
            
            <a href="{{ route('organizaciones.index') }}" title="button" class="btn btn-danger">Volver Atras</a>
          </div>

      </form> 




      </div>

</div>


@stop
