@extends('layouts.app')
@section('content')

<section class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-6 mt-5 descripcionM">

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

          <div class="progress blue">
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

    <div class="col-md-6  mt-5 px-5  row">
    @foreach ($medidas as $m)
    <div class="panelM col-md-10 border px-0">
      <div class="headM d-flex justify-content-between border px-2 py-1 ">
        <h4>Titulo Medida</h4>
        <h4>Tipo Medida</h4>
      </div>
      <div class="descM">
        <div class="infoM d-flex justify-content-around pt-3 ">
          <p>Fecha de inicio</p>
          <p>ubicacion</p>
        </div>
        <p>Descripcion Medida</p>
        <p>organizacion</p>
      </div>

      <div class="progresM">
        <div class="progress-outer2">
                <div class="progress2">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" style="width:80%; box-shadow:-1px 10px 10px rgba(91, 192, 222, 0.7);"></div>
                    <div class="progress-value2">80%</div>
                </div>
      </div>
      <div class="">
        <button type="button" class="btn btn-default">
          Mas informacion
        </button>
      </div>
    </div>
    @endforeach


    </div>



  </div>
</section>
