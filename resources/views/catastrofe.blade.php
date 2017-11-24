@extends('layouts.app')
@section('content')

<section class="container-fluid ">
  <div class="row">
    <div class="col-md-6 ">



        <div class="card m-3 border border-secondary" >
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

    </div

    <div class="col-md-6   medidas justify-content-center d-flex">
      <div class="row">

        <div class=" col ">
            <table class="table">>
            <tbody>
              @foreach ($medidas as $m)
              <tr>

                <td>{{$m->descripcion}}</td>
                <td><div class="d-flex  justify-content-center mt-3">
                </div>
                <a class="color2 btn btn-primary" href="{{route('medidas.show',$m->id)}}">Acceder</a>
              </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          </div>


        </div>


      </div>
      </div>


  </div>
</section>


@stop
