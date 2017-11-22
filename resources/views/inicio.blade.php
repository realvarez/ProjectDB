
@extends('layouts.app')
@section('content')

  <section class="container-fluid justify-content-around mb-0 py-0 px-3">

      <div class="row  justify-content-between"  >

        <div class="col-md-2 mt-5 color2 px-0 EnlG">
          <div class="Enlace mt-5 my-2 p-2">
            Opcion1
          </div>

          <div class="Enlace  my-2 p-2">
            Opcion2
          </div>
          <div class="Enlace  my-2 p-2">
            Administrar Cuenta Usuario
          </div>

          <div class="Enlace  my-2 p-2">
            Administrador
          </div>

          <a class="btn btn-default" href="catastrofes/create">Crear</a>

        </div>

        <div class="col-md-7 mt-5 px-5  bt">



          @forelse($catastroves as $c)
          <!-- <div class="row ">
            <div class="col m-2 p-2"> -->
              <div class="card elemento my-3 p ">
                          <div class="card-header color3 white-text">
                              <h4> {{$c->titulo}} </h4>
                          </div>
                          <div class="card-block color3-1 text-white">
                              <h4 class="card-title">Comuna:{{$c->comuna->nombre}}</h4>
                              <p class="card-text">{{$c->descripcion}}</p>
                              <a class="btn1 btn btn-success" href="{{route('medidas.busqueda',$c->id)}}">Acceder</a>
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
      <div class="col-md-2  mt-5 p-0 tt">

          <a class="twitter-timeline" href="https://twitter.com/pruebadbd1?ref_src=twsrc%5Etfw">Tweets by pruebadbd1</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              <a href="https://twitter.com/pruebadbd1?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @pruebadbd1</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>


      </div>
  </section>


@stop
