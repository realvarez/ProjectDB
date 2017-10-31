@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('Rut') ? ' has-error' : '' }}">
                            <label for="Rut" class="col-md-4 control-label">Rut</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="Rut" value="{{ old('Rut') }}" required>   

                                @if ($errors->has('Rut'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Rut') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Rut') ? ' has-error' : '' }}">
                            <label for="Rut" class="col-md-4 control-label">Rut</label>
                            <select id="W3-select" name = 'option'>
                                <option></option>
                                <option value="Ultrasound Knee Right">Ultrasound Knee Right</option>
                                <option value="Ultrasound Knee Left">Ultrasound Knee Left</option>
                            </select>
                            {{-- <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="Rut" value="{{ old('Rut') }}" required>   

                                @if ($errors->has('Rut'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Rut') }}</strong>
                                    </span>
                                @endif
                            </div> --}}
                        </div>
                       
                        {{-- 
                        <br />
                        <div class="container">
                            <div class="row">
                                <div class="ui-widget">
                                    <label>Region: </label>
                                    
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
