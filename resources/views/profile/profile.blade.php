@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-2 mt-4 section-title">MI PERFIL</h1>
    <p class="mb-5 text">Aqui puedes ver y modificar tu perfil</p>

    <div class="row justify-content-md-center align-items-md-center">   
        <h4 class="col-sm-3 profile-title">Nombre: </h4>
        <p class="col-sm-3 profile-text">{{ $user->name }} <i>"{{ $user->nickname }}"</i> {{ $user->lastname }}</p>
    </div>
    <div class="row justify-content-md-center">
        <h4 class="col-sm-3 profile-title">Equipo: </h4> 
        <p class="col-sm-3 profile-text">{{ $user->team->name }}</p>
    </div>
    <div class="row justify-content-md-center">
        <h4 class="col-sm-3 profile-title">Rol: </h4>
        @if ($user->rol === 0)
            <p class="col-sm-3 profile-text">Admin</p>
        @elseif ($user->rol === 1)
            <p class="col-sm-3 profile-text">Jugador</p>
        @elseif ($user->rol === 2)
            <p class="col-sm-3 profile-text">Coach</p>
        @elseif ($user->rol === 3)
            <p class="col-sm-3 profile-text">Manager</p>
        @else
            <p class="col-sm-3 profile-text">Fan</p>
        @endif
    </div>
    <div class="row justify-content-md-center">
        <h4 class="col-sm-3 profile-title">Correo electrónico: </h4>
        <p class="col-sm-3 profile-text">{{ $user->email }}</p>
    </div>
    <div class="row justify-content-md-center">
        <h4 class="col-sm-3 profile-title">Teléfono: </h4>
        <p class="col-sm-3 profile-text">{{ $user->phone }}</p>
    </div>
    <div class="row justify-content-md-center">
        <h4 class="col-sm-3 profile-title">País: </h4> 
        <p class="col-sm-3 profile-text">{{ $user->country }}</p>
    </div>

    <div class="mt-5 text">
        <a href="/" class="btn-admin">Volver al inicio</a>
        <a href="{{ route('profile.modifyProfile') }}" class="btn-update">Modificar perfil</a>
    </div>
</div>

<div class="container mt-5">
    <h2 class="section-title">Estadísticas</h2>
    <p class="mb-5 text">Tus estadísticas globales</p>
</div>
@endsection
