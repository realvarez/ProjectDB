@extends('layouts.app')
@section('content')

  <section class="container">
    @forelse($catastrofes as $catastrofe)
      <div class="row">
        <div class="col-md">
          {{$catastrofe->id}}
        </div>
        <div class="col-md">
          {{$catastrofe->comuna}}
        </div>
      </div>

    @empty
      <p>NO HAY CATASTROFES</p>

    @endforelse

  </section>
@stop
