@extends('layouts.app')
@section('content')

  <section class="container">
    @forelse($catastrofes as $catastrofe)
      <div class="row">
        <div class="col-md">
          {{$catastrofe->tipo_catastrofe}}
        </div>
        <div class="col-md">
          {{$regiones->nombre->where($catastrofe->region,id)}}
        </div>
        <div class="col-md">
          {{$comunas->nombre->where($catastrofe->comuna,id)}}
        </div>
      </div>

    @empty
      <p>NO HAY CATASTROFES</p>

    @endforelse

  </section>
@stop
