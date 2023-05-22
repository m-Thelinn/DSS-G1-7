@extends('layouts.app')

@section('content')
<h1  class="mt-5 admin-subtitle"> Crear nueva estadistica de equipo</h1>
<div class="text">
    <form method="POST" action="{{ route('teamstats.addTeamstats') }}">
        @csrf
        <label>
            Victorias: <br>
            <input class="form-admin-black" value="{{ old('wins') }}" type="text" name="wins">
            {!! $errors->first('wins', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            Derrotas: <br>
            <input class="form-admin-black" value="{{ old('losses') }}" type="text" name="losses">
            {!! $errors->first('losses', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            Posicion en el ranking: <br>
            <input class="form-admin-black" value="{{ old('ranking_position') }}" type="text" name="ranking_position">
            {!! $errors->first('ranking_position', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            Win-rate: <br>
            <input class="form-admin-black" value="{{ old('win_rate') }}" type="text" name="win_rate">
            {!! $errors->first('win_rate', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            Loss-rate: <br>
            <input class="form-admin-black" value="{{ old('lose_rate') }}" type="text" name="lose_rate">
            {!! $errors->first('lose_rate', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            Equipo <i>(tag)</i>:<br>
            <input class="form-admin-black" value="{{ old('team_shortName') }}" type="text" name="team_shortName">
            {!! $errors->first('team_shortName', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>

        <p></p>
        <button class="mt-5 mb-3 btn-admin">Crear Estadística</button>
    </form>
    <a class="admin-back" href="{{ route('teamstats.showAllteamstats') }}">Atrás</a>
</div>

@endsection