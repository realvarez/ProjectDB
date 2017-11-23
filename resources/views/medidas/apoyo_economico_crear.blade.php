@extends('layouts.app')
@section('content')


<section class="container mt-5">
  <div class="row">
    <div class="col">
      <div class="form-area">
        <form role="form" method="POST" action="{{route('voluntarios.store')}}">
          {{ csrf_field() }}
          <br style="clear:both">
          <h3 style="margin-bottom: 25px; text-align: center;">Crear Medida Apoyo Economico</h3>
          <div class="form-group">
            <label for="titulo">Descripcion</label>
            <input type="text" class="form-control" id="titulo" name="Descripcion" placeholder="Descripcion" required>
          </div>
          <div class="form-group">
            <label for="titulo">Meta Minima</label>
            <input type="text" class="form-control" id="number" name="Meta" placeholder="Cantidad requeriada de Voluntarios" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Numero Cuenta</label>
            <input type="text" class="form-control" id="" name="Region" placeholder="Indique la region " required>

          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Banco Cuenta</label>
            <select class="form-control" name='comuna' id="exampleFormControlSelect1">

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
            <select class="form-control" name='comuna' id="exampleFormControlSelect1">

              <option value="CCT">Cuenta Corriente</option>
              <option value="CTV">Chequera Electrónica</option>
              <option value="CRUT">CuentaRUT</option>
              <option value="AHO">Cuenta de Ahorro</option>
              <option value="CTG">Cuenta de Gastos</option>

            </select>
          </div>


          <div class="form-group">
            <label for="exampleFormControlSelect1">Tituluar Cuenta</label>
            <input type="text" class="form-control" id="dir" name="Direccion" placeholder="Indique la Direccion " required>

          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Correo Cuenta</label>
            <input type="email" class="form-control" id="dir" name="Direccion" placeholder="Indique la Direccion " required>

          </div>



          <button type="submit" id="submit" name="submit" class="btn btn-success">Enviar</button>

        </form>

      </div>
    </div>
  </div>






  <a href="/catastrofes" class="btn-primary">Volver</a>

</section>
