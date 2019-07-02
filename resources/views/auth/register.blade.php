<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>REGISTRARSE NK</title>
    <link rel="stylesheet" href="">
</head>
<body>
    
</body>
</html>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2"><p style="font-size:30px; color:black; ">  ¿Quieres ser una <b>REINA</b>?<br>Reistrate en <b>Nancy Cosmetics</b><br>no te árrepentiras </p></div>
        <div class="col-md-5">

            <div class="card">
                <div class="card-header" style="background: black; color: white; font-size: 20px"> <b>{{ __('Registrase') }}</b></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color: black; font-size: 20px"> <b> {{ __('Nombre') }}</b></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="color: black; font-size: 20px"> <b>{{ __('Correo Eletronico') }}</b> </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="abc@example.com">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="color: black; font-size: 20px"> <b>{{ __('Contraseña') }}</b> </label>

                            <div class="col-md-6">
                                <input id="password" placeholder="*****" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required >

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="color: black; font-size: 20px"> <b>{{ __('Confirm Password') }}</b> </label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="*****" type="password" class="form-control" name="password_confirmation" required  >
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2"><img src="imag/kylie1.jpg" style="height: 380px; width: 300px" ></div>
    </div>
</div>
@endsection
