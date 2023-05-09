@extends('layouts.app')

@section('content')
<div class="container home-text">
    <div class="row justify-content-center">
        <div class="col-md-8 text">
            <div>
                <div class="card-header row justify-content-center mb-4 section-title">ÚNETE A LA COMUNIDAD DE VALCHECK</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="d-flex flex-column align-items-center mb-3">
                            <label for="name" class="col-md-4 col-form-label">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="login-register-form form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex flex-column align-items-center mb-3">
                            <label for="lastname" class="col-md-4 col-form-label">{{ __('Apellidos') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="login-register-form form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex flex-column align-items-center mb-3">
                            <label for="nickname" class="col-md-4 col-form-label">{{ __('Nickname') }}</label>

                            <div class="col-md-6">
                                <input id="nickname" type="text" class="login-register-form form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname') }}" required autocomplete="nickname" autofocus>

                                @error('nickname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex flex-column align-items-center mb-3">
                            <label for="email" class="col-md-4 col-form-label">{{ __('Correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="login-register-form form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex flex-column align-items-center mb-3">
                            <label for="password" class="col-md-4 col-form-label">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="login-register-form form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex flex-column align-items-center mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="login-register-form form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="d-flex flex-column align-items-center mb-3">
                            <label for="country" class="col-md-4 col-form-label">{{ __('Pais') }}</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="login-register-form form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>

                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex flex-column align-items-center mb-3">
                            <label for="phone" class="col-md-4 col-form-label">{{ __('Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="login-register-form form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex flex-column align-items-center mb-3">
                            <label for="rol" class="col-md-4 col-form-label">{{ __('Rol') }}</label>

                            <div class="col-md-6">
                                <select name="rol" id="rol" class="login-register-form form-control @error('rol') is-invalid @enderror" value="{{ old('rol') }}" required autocomplete="rol" autofocus>
                                    <option value="0">Admin</option>                           
                                    <option value="1">Jugador</option>
                                    <option value="2">Coach</option>
                                    <option value="3">Manager</option>
                                    <option value="4">Fan</option>             
                                </select>
                                @error('rol')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="d-flex flex-column align-items-center mb-3 mt-5">
                            <div class="col-md-4 col-form-label">
                                <button type="submit" class="btn btn-default">
                                    {{ __('Crear cuenta') }}
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
