
@extends('layouts.app')
@section('content')

  <section class="container-fluid">

  <h5>Lista de catastrofes</h5>

      <div class="row">
        <div class="col-md-4 color2">
          1
          1
          1

        </div>

        <div class="col-md-8 contenido color1">
          <!-- @forelse($catastroves as $c)
          <div class="row">
            <div class="col">
              <div class="elemento">
                <p>Tipo Catastrofe:   {{$c->descripcion}}</p>
                <p>Comuna:            {{$c->comuna->nombre}}</p>
                <p>Codigo catastrofe: {{$c->tipo_catastrofe}}</p>
              </div>
              @empty
              <p>NO HAY CATASTROFES</p>

              @endforelse -->

            </div>

          </div>








  </section>


@stop
