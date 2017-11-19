
@extends('layouts.app')
@section('content')

  <section class="container-fluid mt-5">

      <div class="row mt-5">
        <div class="col-md-2 color2">








        </div>

        <div class="col-md-7 contenido color1">
          @forelse($catastroves as $c)
          <div class="row ">
            <div class="col m-2 p-2">
              <div class="card elemento">
                          <div class="card-header  danger-color-dark white-text">
                              <h4> {{$c->titulo}} </h4>
                          </div>
                          <div class="card-block ">
                              <h4 class="card-title">Comuna:{{$c->comuna->nombre}}</h4>
                              <p class="card-text">{{$c->descripcion}}</p>
                              <a class="btn1 btn btn-danger">Acceder</a>
                          </div>
                      </div>


              @empty
              <p>NO HAY CATASTROFES</p>

              @endforelse

              {{ $catastroves->links() }}


            </div>

          </div>








  </section>


@stop
