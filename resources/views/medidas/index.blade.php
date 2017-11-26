@extends('layouts.admin')
@section('content')
<div class="col-md-8 ml-5 center">
	<h1 class="display-4 text-center">Administracion Medidas del Sistema</h1>
	<div class="card mb-5">
      <div class="card-block p-0">
        <table class="table table-bordered table-sm m-0">
              <thead class="">
                  <tr>
                      <th>#</th>
                      <th>Titulo</th>
                      <th>Categoria</th>
                      <th>Estado</th>
                      <th>Avance</th>
                      <th>Accion</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($medidas as $item)
                  <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->titulo }}</td>

                      @if($item->MorphMedida_type =='App\Recoleccion')
                        <td>Rocoleccion</td>
                      @elseif($item->MorphMedida_type =='App\Apoyo_economico')
                        <td>Apoyo Economico</td>
                      @elseif($item->MorphMedida_type =='App\Evento')
                        <td>Evento A Beneficio</td>
                      @elseif($item->MorphMedida_type =='App\Voluntariado')
                        <td>Voluntariado</td>
                      @endif

                      @if($item->estado == 0)
                        <td>Desactivada</td>
                      @else
                        <td>Activada</td>
                      @endif
                      <td class="text-center">
                        <a href="{{route('medidas.show',$item->id)}}" class="btn btn-primary btn-sm" role="button">Ver</a>

                        <a href="{{route('medidas.aprobar',$item->id)}}" class="btn btn-warning  btn-sm" role="button">Aprobar</a>
                        
                        <a href="{{route('medidas.destroy',$item->id)}}" class="btn btn-danger btn-sm" role="button">Eliminar</a>
                      </td>
                  </tr>
                 @endforeach
              </tbody>
          </table>
      </div>
    </div>
  </div>
@stop
