@extends('layouts.app')
@section('content')


<section class="container-fluid border border-primary p-3 mb-2 bg-light text-dark w-50">
  <div class="row">
    <div class="col-md-12">
      <h3>Apoyo Economico</h3>
    </div>
    <div class="col-md-12">
      <h4>Meta del Evento:</h4>
      <p>{{$apoyo->metaMinima}}</p>
    </div>
    <div class="col-md-12">
      <h4>Dinero recolectado:</h4>
      <p>{{$apoyo->actual}}</p>
    </div>
    <div class="col-md-12">
      <h4>Descripcion:</h4>
      <p>{{$apoyo->medida->descripcion}}</p>
    </div>
    <div class="col-md-6">
      <h4>Datos Eventos:</h4>
      <p>Banco: {{$apoyo->bancoCuenta}}</p>
      <p>Tipo de Cuenta: {{$apoyo->TipoCuenta}}</p>
      <p>Numero de Cuenta: {{$apoyo->numCuenta}}</p>
      <p>Titular: {{$apoyo->titularCuenta}}</p>
      <p>Correo: {{$apoyo->correoCuenta}}</p>
      <p>Fecha Inicio: {{$apoyo->medida->fecha_inicio}}</p>
      <p>Fecha Termino: {{$apoyo->medida->fecha_termino}}</p>
      <p>ID medida: {{$apoyo->id}}</p>

    </div>
    <div class="col-md-6">
      <form role="form" method="POST" action="{{route('deposito.create')}}">
        {{ csrf_field() }}
        <br style="clear:both">
        <h3 style="margin-bottom: 25px; text-align: center;">Donar</h3>
        <div>
          <label for="titulo2 ">Nombre</label>
          <input type="number" class="form-control" id="nombre" name ="nombre" id value = "{{$apoyo->id}}" required>
        </div>
        <div>
          <label for="titulo2 ">Apellido</label>
          <input type="text" class="form-control" id="apellido" name ="apellido" value = "{{$apoyo->id}}" required>
        </div>
        <div>
          <label for="titulo2 ">Email</label>
          <input type="email" class="form-control" id="email" name ="email" id value = "{{$apoyo->id}}" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Banco Cuenta</label>
          <select class="form-control" name='banco' id="exampleFormControlSelect1">

            <option value="027*CORP-BANCA">CORP-BANCA</option>
            <option value="012*BancoEstado">BANCOESTADO</option>
            <option value="001*BANCO DE CHILE">BANCO DE CHILE</option>
            <option value="009*BANCO INTERNACIONAL">BANCO INTERNACIONAL</option>
            <option value="016*BANCO DE CREDITO E INVERSIONES">BANCO DE CREDITO E INVERSIONES</option>
            <option value="014*SCOTIABANK-DESARROLLO">SCOTIABANK-DESARROLLO</option>
            <option value="027*CORP-BANCA">CORP-BANCA</option>
            <option value="028*BICE">BICE</option>
            <option value="031*HSBC BANK CHILE">HSBC BANK CHILE</option>
            <option value="037*BANCO SANTANDER">BANCO SANTANDER</option>
            <option value="039*BANCO ITAU">BANCO ITAU</option>
            <option value="045*THE BANK OF TOKYO-MITSUBISHI">THE BANK OF TOKYO-MITSUBISHI</option>
            <option value="049*BANCO SECURITY">BANCO SECURITY</option>
            <option value="051*BANCO FALABELLA">BANCO FALABELLA</option>
            <option value="053*BANCO RIPLEY">BANCO RIPLEY</option>
            <option value="055*BANCO CONSORCIO">BANCO CONSORCIO asdadasdasdsasdassd</option>
            <option value="672*COOPEUCH">COOPEUCH</option>
            <option value="057*BANCO PARIS">BANCO PARIS</option>
            <option value="504*BANCO BBVA">BANCO BBVA</option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Tipo Cuenta</label>
          <select class="form-control" name='tipo' id="exampleFormControlSelect1">

            <option value="CCT">Cuenta Corriente</option>
            <option value="CTV">Chequera Electrónica</option>
            <option value="CRUT">CuentaRUT</option>
            <option value="AHO">Cuenta de Ahorro</option>
            <option value="CTG">Cuenta de Gastos</option>

          </select>
        </div>
        <div class="form-group">
          <label for="titulo">Cantidad</label>
          <input type="number" class="form-control" id="titulo" name="monto" min="1" required>
        </div>
        <div>
          <label for="titulo2 ">Codigo de medida</label>
          <input type="number" class="form-control" id="id_medida" name = id value = "{{$apoyo->id}}" required>
        </div>
        <input type="number" class="form-control" id="id_medida" name = id value = "{{$apoyo->id}}" required>
        <button type="submit" id="submit" name="submit" class="btn btn-success">Enviar</button>
      </form>
    </div>

  </div>

  <div class="row d-flex justify-content-center">

    <div class="col-md-8 bg-light border border-light">
        <h4>Comentarios</h4>
        <div class="">
            <div class="card">
              <div class="card-header">
                Nombre Usuario
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>comentario</p>
                  <p>fecha de publicacion</p>
                </blockquote>
              </div>
            </div>
        </div>
        <div class="mt-3">
          <form class="" action="index.html" method="post">
            <div class="form-group">
              <label for="comentario">Ingresa tu Comentario</label>
              <textarea class="form-control" id="comentario" name="comentario" rows="3"></textarea>
            </div>
            <button type="submit" id="submit" name="submit" class="btn btn-success">Comentar</button>
          </form>

        </div>
    </div>

  </div>


</section>

@stop
