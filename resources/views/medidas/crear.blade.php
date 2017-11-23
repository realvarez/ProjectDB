@extends('layouts.app')
@section('content')

<section class="container mt-5">
  <div class="row">
    <div class="col">
      <div class="form-area">
        <form role="form" method="POST">
         {{ csrf_field() }}
        <br style="clear:both">
            <h3 style="margin-bottom: 25px; text-align: center;">Definir tipo de medida</h3>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Categoria</label>
            <select class="form-control" name='comuna' id="exampleFormControlSelect1">
              @foreach($tipo as $ca)
              <option>{{$ca}}</option>
              @endforeach
            </select>
          </div>

          <script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
  <script src="http://momentjs.com/downloads/moment-timezone-with-data.js"></script>




  <div class="container" style="margin-top:70px;">
    <div class="row">
          <form class="form-horizontal col-sm-7 col-sm-offset-2" action="" method="post">
              <div class="form-group registration-date">
                  <label class="control-label col-sm-3" for="registration-date">Fecha Inicio:</label>
                <div class="input-group registration-date-time">
                  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                  <input class="form-control" name="registration_date" id="registration-date" type="date">
                </div>
              </div>
          </form>
    </div>
  </div>

  <div class="container" style="margin-top:70px;">
    <div class="row">
          <form class="form-horizontal col-sm-7 col-sm-offset-2" action="" method="post">
              <div class="form-group registration-date">
                  <label class="control-label col-sm-3" for="registration-date">Fecha Termino:</label>
                <div class="input-group registration-date-time">
                  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                  <input class="form-control" name="registration_date" id="registration-date" type="date">
                </div>
              </div>
          </form>
    </div>
  </div>




            <a href="{{route('voluntarios.create')}}" class="btn-primary">Siguiente</a>
        </form>

    </div>
    </div>
  </div>








  <a href="/catastrofes" class="btn-primary">Volver</a>

</section>
