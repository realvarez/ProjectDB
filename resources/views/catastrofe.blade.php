@extends('layouts.app')
@section('content')

<section class="container">
  <div class="row">
    <div class="col-md-12 mt-5 border-bottom-4 border-success rounded-bottom-3">
        <h4>{{$c->titutulo}}</h4>
        <p>{{$c->tipoC->tipo}}</p>
        <p>{{$c->comuna->nombre}}</p>
        <p>{{$c->descripcion}}</p>
    </div>

    <div class="col-md-12">
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
