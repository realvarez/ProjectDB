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
            <label for="titulo">Descripcion</label>
						<input type="text" class="form-control" id="titulo" name="Descripcion" placeholder="Descripcion" required>
					   </div>
    				<div class="form-group">
            <label for="titulo">Meta recoleccion</label>
						<input type="number" class="form-control" id="number" name="Meta" placeholder="Cantidad requeriada de Voluntarios" required>
					   </div>
             <div class="form-group">
               <label for="exampleFormControlSelect1">Tipo recoleccion</label>
               <input type="text" class="form-control" id="dir" name="Direccion" placeholder="Indique la Direccion " required>

             </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Region</label>
            <input type="text" class="form-control" id="" name="Region" placeholder="Indique la region " required>

          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Comuna</label>
            <input type="text" class="form-control" id="" name="Comuna" placeholder="Indique la Comuna " required>

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
