@extends('layouts.admin')
@section('content')
<div class="col-md-8 mt-5 ml-5 center">
	<h2>Administracion Medidas del Sistema</h2>
	<div class="card mb-5 mt-3">
      <div class="card-block p-0">
        <table class="table table-bordered table-sm m-0">
              <thead class="">
                  <tr>
                      <th>#</th>
                      <th>Titulo</th>
                      <th>Categoria</th>
                      <th>Estado</th>
                      <th>Accion</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($medidas as $item)
                  <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->titulo }}</td>
                      <td>
                      @if($item->MorphMedida_type =='App\Recoleccion')
                        Rocoleccion
                      @elseif($item->MorphMedida_type =='App\Apoyo_economico')
                        Apoyo Economico
                      @elseif($item->MorphMedida_type =='App\Evento')
                        Evento A Beneficio
                      @elseif($item->MorphMedida_type =='App\Voluntariado')
                        Voluntariado
                      @endif
                      </td>
                      <td>
                        @if($item->estado == 0)
                          Desactivada
                        @else
                          Activada
                        @endif
                      </td>
                      <td class="text-center">
                        <a href="{{route('medidas.show',$item->id)}}" class="btn btn-primary btn-sm" role="button">Ver</a>

                        <a href="{{route('medidas.aprobar',$item->id)}}" class="btn btn-warning  btn-sm" role="button">Cambiar Estado</a>
                        
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
