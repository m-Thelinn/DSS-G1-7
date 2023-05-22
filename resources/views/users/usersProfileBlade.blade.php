@extends('layouts.app')

@section('content')
<div class="container text mt-5">
    <p class="profile-data"> <i>{{ $user->name }} {{ $user->lastname }}</i></h1>
    <h2 class="profile-name">{{ $user->nickname }}</h2>
    @if( $user->rol === 1)
        <p class="profile-text">Jugador</p>
    @elseif( $user->rol === 2)
        <p class="profile-text">Coach</p>
    @elseif( $user->rol === 3)
        <p class="profile-text">Manager</p>
    @elseif( $user->rol === 4)
        <p class="profile-text">Fan</p>
    @else
        <p class="profile-text">Admin</p>
    @endif

    @if( $user->team->picture == null)
    <img class="mb-5" src = "{{ url('img/none.png') }}" width="100" height="100" alt="img">
    @else
    <img class="mb-5" src = "{{ $user->team->picture }}" width="100" height="100" alt="img">
    @endif

    <h3 class="profile-stats-title mt-5 mb-5">Estadísticas</h3>
    <div class="d-flex justify-content-evenly mb-5">
        <div>
            <p class="profile-text">Asesinatos</p>
            <p class="profile-data">{{ $userstat->kills }}</p>
        </div>
        <div>
            <p class="profile-text">Muertes</p>
            <p class="profile-data">{{ $userstat->deaths }}</p>
        </div>
        <div>
            <p class="profile-text">Asistencias</p>
            <p class="profile-data">{{ $userstat->assists }}</p>
        </div>
        <div>
            <p class="profile-text">Veces MVP</p>
            <p class="profile-data">{{ $userstat->times_mvp }}</p>
        </div>
        <div>
            <p class="profile-text">Winrate</p>
            <p class="profile-data">{{ $userstat->win_rate }}%</p>
        </div>
        <div>
            <p class="profile-text">ADR</p>
            <p class="profile-data">{{ $userstat->adr }}</p>
        </div>
    </div>
    
    <a class="btn-admin" href="{{ route('user.showAllUsers') }}">Atrás</a>
</div>

@endsection