@extends('layouts.app')
@section('content')

<section class="container mt-5">
  <div class="row">
    <div class="col">
      <form class="form-area" form role="form" method="POST" action="{{route('medidas.createFormulario')}}">
       {{ csrf_field() }}
       <br style="clear:both">
       <h3 style="margin-bottom: 25px; text-align: center;">Definir tipo de medida</h3>

       <div class="form-group">
        <label for="exampleFormControlSelect1">Categoria</label>
        <select class="form-control" name="tipo" id="exampleFormControlSelect1">


          <option value="c1">Apoyo Economico</option>
          <option value="c2">Voluntariado</option>
          <option value="c3">Recoleccion</option>
          <option value="c4">Evento</option>

        </select>
      </div>


      <button type="submit" id="submit" name="submit" class="btn btn-success">siguiente</button>
    </form>

  </div>
</div>
</div>

<a href="/medidas_info/{{$catastrofe_id}}" class="btn btn-info mb-3">Volver</a>
</section>
@stop