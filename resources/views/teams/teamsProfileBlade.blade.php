@extends('layouts.app')

@section('content')
<div class="container text mt-5">
    <h1 class="profile-name">{{ $team->name }}</h1>
    <h2 class="profile-data">{{ $team->short_name }}</h2>
    <img class="mb-5" src="{{ $team->picture }}" width="150" height="150" alt="img">
    <p class="">{{ $team->description }}</p>

    <h3 class="profile-stats-title mt-5 mb-5">Estadísticas</h3>
    <div class="d-flex justify-content-evenly mb-5">
        <div>
            <p class="profile-text">Victorias</p>
            <p class="profile-data">{{ $teamstat->wins }}</p>
        </div>
        <div>
            <p class="profile-text">Derrotas</p>
            <p class="profile-data">{{ $teamstat->losses }}</p>
        </div>
        <div>
            <p class="profile-text">Posicion en ranking</p>
            <p class="profile-data">{{ $teamstat->ranking_position }}</p>
        </div>
        <div>
            <p class="profile-text">Tasa de victorias</p>
            <p class="profile-data">{{ $teamstat->win_rate }}</p>
        </div>
        <div>
            <p class="profile-text">Tasa de derrotas</p>
            <p class="profile-data">{{ $teamstat->lose_rate }}</p>
        </div>
    </div>
    <a class="btn-admin" href="{{ route('team.showAllTeams') }}">Atrás</a>
</div>
@endsection