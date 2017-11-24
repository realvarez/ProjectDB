@extends('layouts.app')
@section('content')

<section class="container-fluid color1">
  <div class="row">
    <div class="col-md-6 ">



        <div class="card m-3 border border-primary" >
          <div class="card-body">
            <h4 class="card-title">{{$c->titulo}}</h4>
            <p class="card-text">{{$c->descripcion}}</p>
            <div class="Especif">
              <h5>Region:</h5>
              <p>{{$c->comuna->region->nombre}}</p>
              <h5>Comuna:</h5>
              <p>{{$c->comuna->nombre}}</p>
              <h5>Categoria:</h5>
              <p>{{$c->tipo_catastrove->tipo}}  </p>
              <h5>Fecha de Inicio:</h5>
              <p>------------------</p>
            </div>

          </div>
        </div>
        <!-- <div class="col-md-4 d-flex justify-content-center align-items-center">

          <div class="progress2 blue">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">90%</div>
            </div>

        </div>
      </div> -->

    </div>

    <div class="col-md-6   medidas justify-content-center d-flex">
      <div class="row">
        <div class=" card col-md-12 mt-3 border border-primary py-2">
          <h4>Medidas de Ayuda</h4>
        </div>
        @foreach ($medidas as $m)
        <div class=" col-md-6 mt-3 ">


              <div class="card my-2 border border-primary" >
                <div class="card-body">
                  <h4 class="card-title text-uppercase border border-left-0 border-right-0 border-top-0 border-succses"> {{$m->titulo}} </h4>
                  <h6 class="card-subtitle mb-2 text-muted">tipo</h6>
                  <p class="card-text">{{$m->descripcion}}</p>
                  <div class="d-flex justify-content-between">

                    <p>Fecha:----</p>

                  </div>
                  <a class="color2 btn btn-primary" href="{{route('medidas.busqueda',$c->id)}}">Acceder</a>
                </div>
              </div>


          </div>
          @endforeach


        </div>


      </div>



  </div>
</section>


@stop
