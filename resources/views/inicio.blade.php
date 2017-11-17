
@extends('layouts.app')
@section('content')

  <section class="container">
  <br>
  <br>
  <br>

  <h5>Lista de catastrofes</h5>
    @forelse($catastroves as $c)
      <div class="row">
        <div class="col-md">

          <p>Tipo Catastrofe:   {{$c->descripcion}}</p>
          <p>Comuna:            {{$c->comuna->nombre}}</p>
          <p>Codigo catastrofe: {{$c->tipo_catastrofe}}</p>
          
          <p>--------------------------</p>
          <br>

        </div>
        <div class="col-md">
         
        </div>
        <div class="col-md">
      
        </div>
      </div>

    @empty
      <p>NO HAY CATASTROFES</p>

    @endforelse

  </section>


@stop
   
