@extends('layouts.app')
@section('content')

<div class="container">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>Ingresar</h2>
                    <hr>
                </div>
            </div>
            <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="sr-only" for="email">Correo</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="Correo" autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="password">Contraseña</label>
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
                <div class="col-md-3"></div>
                <div class="col-md-6" style="padding-top: .35rem">
                    <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                        <label class="form-check-label">
                            <input class="form-check-input" name="remember"
                                   type="checkbox" {{ old('remember') ? 'checked' : '' }} >
                            <span style="padding-bottom: .15rem">Recordarme</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Entrar</button>
                    <a class="btn btn-link" href="{{ route('password.request') }}">Olvide mi contraseña?</a>
                </div>
            </div>
        </form>
    </div>






@stop
