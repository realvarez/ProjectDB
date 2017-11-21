@extends('layouts.app')
@section('content')

<section class="container-fluid">
  <div class="row">
    <div class="col-md-12 mt-5 border-bottom-4 border-success rounded-bottom-3">
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
            <p>{{$c->tipoC}}  </p>
            <h5>Fecha de Inicio:</h5>
            <p>------------------</p>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center lign-items-center">

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

    <div class="col-md-12 px-5 py-3">
    @foreach ($medidas as $m)
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">{{$m->tipo_medida}}</h3>
        <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
      </div>
      <div class="panel-body">Panel content</div>
    </div>
    @endforeach
    </div>

    <div class="col-md-6">

    </div>

  </div>
</section>
