@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Usuario creado/iniciado con exito') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Has iniciado sesion') }}
                </div>
            </div>

            <!--VERIFICAR QUE ES USUARIO NORMAL-->
            <div>
                <a href="#"><input type="button" value="VER PERFIL USUARIO"></a>
            </div>

            <!--VERIFICAR QUE ES ADMIN-->
            <div>
                <a href="#"><input type="button" value="VER GESTION ADMINISTRADOR"></a>
            </div>
        </div>
    </div>
</div>
@endsection
