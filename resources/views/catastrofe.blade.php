@extends('layouts.app')
@section('content')

<section class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-6 mt-3 mb-0 pb-0 descripcionM color2">

      <div class="row">
        <div class="col-md-8">

          <h4>{{$c->titutulo}}</h4>
          <div class="Descr_c">
            <h5>Descripcion</h5>
            <p>{{$c->descripcion}}</p>
          </div>
          <div class="Especif">
            <h5>Comuna:</h5>
            <p>{{$c->comuna->nombre}}</p>
            <h5>Categoria:</h5>
            <p>{{$c->tipo_catastrove->tipo}}  </p>
            <h5>Fecha de Inicio:</h5>
            <p>------------------</p>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">

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
      </div>

    </div>

    <div class="col-md-6  mt-5 px-5 medidas justify-content-center d-flex">
      @foreach ($medidas as $m)
      <div class="row">

        <div class=" col ">
            <table class="table">>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>{{$m->tipo_medida}}</td>
                <td>{{$m->descripcion}}</td>
                <td><div class="d-flex  justify-content-center mt-3">
                  <button type="button" class="btn btn-default" href="{{route('medidas.show',$m->show}}">
                    Mas informacion
                  </button>
                </div></td>
              </tr>
            </tbody>
          </table>
          </div>

        </div>


      </div>
      </div>
      @endforeach



  </div>
</section>
