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
              <p>{{$c->created_at}}</p>
            </div>

          </div>
             @auth
                  @if(Auth::user()->miembro->where('rol',4)->first() != NULL)
                    <a class="btn btn-primary" href="{{route('medidas.crear',$c->id)}}">Agregar Medida</a>
                    @endif
            @endauth

        </div>

    </div>

    <div class="col-md-6   ">
      <div class="row d-flex justify-content-between  medidas">
        <div class=" col-md-12  bg-primary text-white rounded d-flex justify-content-center align-self-start mt-3 border border-primary">
            <h4>Medidas de Ayuda</h4>
        </div>
        @foreach ($medidas as $m)
        <div class=" col-md-6 w-50">


              <div class="card  m-1 border border-primary" >
                <div class="card-body">
                  <h4 class="card-title text-uppercase border border-left-0 border-right-0 border-top-0 border-succses"> {{$m->titulo}} </h4>
                  @if($m->MorphMedida_type=="App\Evento")
                  <h6 class="card-subtitle mb-2 text-success">Evento a beneficio</h6>
                  @elseif($m->MorphMedida_type=="App\Apoyo_economico")
                  <h6 class="card-subtitle mb-2 text-danger">Apoyo Economico</h6>
                  @elseif($m->MorphMedida_type=="App\Voluntariado")
                  <h6 class="card-subtitle mb-2 text-info">Solicitud de Voluntarios</h6>
                  @else
                  <h6 class="card-subtitle mb-2 text-secondary">Recoleccion Centro de Acopio</h6>
                  @endif
                  <!-- <p class="card-text">{{$m->descripcion}}</p> -->
                  <div class="d-flex justify-content-between">
                    <p>Inicio: {{$m->fecha_inicio}}</p>
                    <p>Termino: {{$m->fecha_termino }}</p>
                  </div>
                  <!-- <div class="d-flex justify-content-between">

                  </div> -->
                  <div class="d-flex mt-0 justify-content-start">
                    <p>Organizacion: </p>
                    <p>{{$m->organization->nombre}}</p>

                  </div>

                  <div class="progress m-1 ">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{$m->avance}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$m->avance}}%">{{$m->avance}}%</div>
                  </div>

                  <div class="d-flex justify-content-center">

                    <a class="color2 btn btn-primary" href="{{route('medidas.show',$m->id)}}">Acceder</a>
                  </div>
                </div>
              </div>


          </div>
          @endforeach
          <div class="col-md-12">
            {!!$medidas->links('pagination')!!}

          </div>
        </div>


      </div>



      <a href="/inicio" class="btn-primary btn mx-2 ">Volver</a>
  </div>
</section>


@stop
