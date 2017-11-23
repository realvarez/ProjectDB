@extends('layouts.app')
@section('content')

<div class="container ">
    {!! Form::open(array('route' => 'registro', 'class' => 'form')) !!}  
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h2>Registro Nuevo Usuario</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 field-label-responsive">
            <label for="name">Nombres</label>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>

                    <input type="text" name="name" class="form-control col-md-5" id="nombre"
                    placeholder="Nombres" required autofocus>

                    <input type="text" name="apellido" class="form-control col-md-6" id="apellido"
                    placeholder="Apellidos" required autofocus>

                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                    @if ($errors->has('apellido'))
                    <span class="help-block">
                        <strong>{{ $errors->first('apellido') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 field-label-responsive">
            <label for="Run">Run</label>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('run') ? ' has-error' : '' }}">
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                    <input type="text" name="Run" class="form-control" id="Run"
                    placeholder="Run (Sin Puntos ni Guion)" required autofocus>
                </div>
                @if ($errors->has('run'))
                <span class="help-block">
                    <strong>{{ $errors->first('run') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 field-label-responsive">
            <label for="email">Correo</label>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                    <input type="text" name="email" class="form-control" id="email"
                    placeholder="tu@correo.com" required autofocus>
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 field-label-responsive">
            <label for="password">Contraseña</label>
        </div>
        <div class="col-md-6">
            <div class="form-group has-danger {{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                    <input type="password" name="password" class="form-control" id="password"
                    placeholder="Contraseña" required>
                    @if ($errors->has('password'))

                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 field-label-responsive">
            <label for="password-confirm">Confirma tu Contraseña</label>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon" style="width: 2.6rem">
                        <i class="fa fa-repeat"></i>
                    </div>
                    <input type="password" name="password_confirmation" class="form-control"
                    id="password-confirm" placeholder="Ingresa Nuevamente" required>
                </div>
            </div>
        </div>
    </div>


    <div class="row form-group">
        <div class="col-md-3 field-label-responsive"> 
            <label for="region">Region</label> 
        </div>
        <div class="col-md-6">
            <div  class="mb-2 mr-sm-2 mb-sm-0">
                {!! Form::select('region_id',[''=>'--- Selecciona Region ---']+$regiones,null,['select class'=>'form-control']) !!}
            </div>
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-3 field-label-responsive"> 
            <label for="region">Comuna</label> 
        </div>
        <div class="col-md-6">
            <div  class="mb-2 mr-sm-2 mb-sm-0">
                {!! Form::select('comuna_id',[''=>'--- Selecciona Comuna ---'],null,['class'=>'form-control']) !!}
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-3 field-label-responsive">
            <label for="email">Dirección</label>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                    <input type="text" name="direccion" class="form-control" id="direccion"
                    placeholder="Calle y #" required autofocus>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Registrarse</button>
        </div>
    </div>

    
    {!! Form::close() !!}
</div>
@endsection
