@extends('layouts.app')

@section('content')
<div class="container text mt-5">
    <h1 class="profile-name">{{ $team->name }}</h1>
    <h2 class="profile-data">{{ $team->short_name }}</h2>
    <img class="mb-5 mt-3" src="{{ $team->picture }}" width="150" height="150" alt="img">
    <p class="">{{ $team->description }}</p>

    <h3 class="profile-stats-title mt-5 mb-4">Jugadores</h3>
    @foreach ($users as $user)
    @if ($user->rol == 1 || $user->rol == 2 || $user->rol == 3)
    <div class="mb-1">
        <a class="profile-player" href="{{ route('user.userData',  ['id' => $user->id]) }}">{{($user->name)}} <i style="color: var(--main-color);">{{($user->nickname)}}</i> {{($user->lastname)}} -
            @if ($user->rol == 0)
            Admin
            @elseif ($user->rol == 1)
            Jugador
            @elseif ($user->rol == 2)
            Coach
            @else
            Manager
            @endif
    </a>
    </div>
    @endif
    @endforeach

    <h3 class="profile-stats-title mt-5 mb-4">Estadísticas</h3>
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
            <p class="profile-data">{{ $teamstat->win_rate }}%</p>
        </div>
        <div>
            <p class="profile-text">Tasa de derrotas</p>
            <p class="profile-data">{{ $teamstat->lose_rate }}%</p>
        </div>
    </div>
    <a class="btn-admin" href="{{ route('team.showAllTeams') }}">Atrás</a>
</div>
@endsection