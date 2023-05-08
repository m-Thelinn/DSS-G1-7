@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="admin-title m-5">Panel de control</h1>

    <div class="d-flex justify-content-center">
        <a class="btn-admin" href="{{ route('user.showAllUsers') }}">Usuarios</a>
        <a class="btn-admin" href="{{ route('team.showAllTeams') }}">Equipos</a>
        <a class="btn-admin" href="{{ route('game.showAllGames') }}">Partidos</a>       
        <a class="btn-admin" href="{{ route('userstats.showAlluserstats') }}">Estadisticas de jugadores</a>   
        <a class="btn-admin" href="{{ route('teamstats.showAllteamstats') }}">Estadisticas de equipos</a>
    </div>

    <div class="text-center mt-5">
        <a class="admin-back" href="/iniciado">Volver al inicio</a> 
    </div>
</div>
@endsection
