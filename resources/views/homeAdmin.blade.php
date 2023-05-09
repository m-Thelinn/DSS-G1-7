@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="admin-title m-5">Panel de control</h1>

    <div class="d-flex justify-content-center">
        <a class="btn-admin-panel" style="background-color: blueviolet;" href="{{ route('user.showAllUsers') }}">Usuarios</a>
        <a class="btn-admin-panel" style="background-color: green;" href="{{ route('team.showAllTeams') }}">Equipos</a>
        <a class="btn-admin-panel" style="background-color: crimson;" href="{{ route('game.showAllGames') }}">Partidos</a>       
        <a class="btn-admin-panel" style="background-color: darkgoldenrod;" href="{{ route('userstats.showAlluserstats') }}">Estadisticas de jugadores</a>   
        <a class="btn-admin-panel" style="background-color: cornflowerblue;" href="{{ route('teamstats.showAllteamstats') }}">Estadisticas de equipos</a>
    </div>

    <div class="text-center mt-5">
        <a class="admin-back" href="/">Volver al inicio</a> 
    </div>
</div>
@endsection
