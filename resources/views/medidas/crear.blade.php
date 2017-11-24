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

      <script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
      <script src="http://momentjs.com/downloads/moment-timezone-with-data.js"></script>




      <div class="container" style="margin-top:70px;">
        <div class="row">
          <div class="form-group registration-date">
            <label class="control-label col-sm-3" for="registration-date">Fecha Inicio:</label>
            <div class="input-group registration-date-time">
              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
              <input class="form-control" name="fecha_inicio" id="registration-date" type="date">
            </div>
          </div>
        </div>
      </div>

      <div class="container" style="margin-top:70px;">
        <div class="row">

          <div class="form-group registration-date">
            <label class="control-label col-sm-3" for="registration-date">Fecha Termino:</label>
            <div class="input-group registration-date-time">
              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
              <input class="form-control" name="fecha_termino" id="registration-date" type="date">
            </div>
          </div>

        </div>
      </div>


      <button type="submit" id="submit" name="submit" class="btn btn-success">siguiente</button>
    </form>

  </div>
</div>
</div>








<a href="/catastrofes" class="btn-primary">Volver</a>

</section>
