
@extends('layouts.app')
@section('content')

  <section class="container-fluid justify-content-around mb-0 py-0 px-3 fonta color1">

      <div class="row  justify-content-between">

        <!-- <div class="col-md-2  bt color2 px-0 border  border-right-0 border-top-0 border-secondary text-white">
          <div class="Enlace  my-3 mx-1 p-2">
            Opcion1
          </div>

          <div class="Enlace  my-3 mx-1 p-2">
            Opcion2
          </div>
          <div class="Enlace  my-3  mx-1 p-2">
            Administrar Cuenta Usuario
          </div>

          <div class="Enlace  my-3 mx-1 p-2">
            Administrador
          </div>

          <a class="btn btn-default" href="catastrofes/create">Crear</a>

        </div> -->

        <div class="col-md-7  px-5 ">



          @forelse($catastroves as $c)
          <!-- <div class="row ">
            <div class="col m-2 p-2"> -->
              <div class="card my-2" >
                <div class="card-body">
                  <h4 class="card-title text-uppercase border border-left-0 border-right-0 border-top-0 border-secondary"> {{$c->titulo}} </h4>
                  <h6 class="card-subtitle mb-2 text-muted">{{$c->tipo_catastrove->tipo}}</h6>
                  <!-- <p class="card-text">{{$c->descripcion}}</p> -->
                  <div class="d-flex justify-content-between">
                    <p>Region: {{$c->comuna->region->nombre}}</p>
                    <p class="card-subtittle">Comuna: {{$c->comuna->nombre}}</p>
                    <p>Fecha:{{$c->created_at}}</p>

                  </div>
                  <a class="color2 btn btn-primary" href="{{route('medidas.busqueda',$c->id)}}">Acceder</a>
                </div>
              </div>
                @empty
              <p>NO HAY CATASTROFES</p>
              @endforelse
              <!-- <div class="col mt-5"> -->
                {!!$catastroves->links('pagination')!!}
              <!-- </div> -->
            </div>

          <!-- </div>
      </div> -->
      <div class="col-md-2  p-0 tt">

          <a class="twitter-timeline" href="https://twitter.com/pruebadbd1?ref_src=twsrc%5Etfw">Tweets by pruebadbd1</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              <a href="https://twitter.com/pruebadbd1?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @pruebadbd1</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>


      </div>
  </section>


@stop
