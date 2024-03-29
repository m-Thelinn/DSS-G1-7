@extends('layouts.app')

@section('content')
<div class="container home-text">
    <div class="row justify-content-center">
        <div class="col-md-8 text">
            <div>
                <div class="card-header row justify-content-center mb-4 section-title">{{ __('Bienvenido a VALCHECK') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

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

                        <div class="d-flex flex-column align-items-center">
                            <label for="password" class="col-md-4 col-form-label">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="login-register-form form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 mt-3">
                            <div class="col-sm-3 offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input login-remember" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordar cuenta') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div>
                                <button type="submit" class="btn-default mt-5">
                                    {{ __('Iniciar sesión') }}
                                </button>
                            </div>
                        </div>
                        <div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link login-lost" href="{{ route('password.request') }}">
                                    {{ __('¿Olvidaste tu contraseña?') }}
                                </a>
                             @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
