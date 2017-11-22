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
        
       

            <a href="{{route('voluntarios.create')}}" class="btn-primary">Siguiente</a>
        </form>

    </div>
    </div>
  </div>








  <a href="/catastrofes" class="btn-primary">Volver</a>

</section>
