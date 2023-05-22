@extends('layouts.app')
@section('content')

<h1> Modificar estadistica de equipo</h1>
<div class="text">
    <form method="POST" action="{{ route('teamstats.updateTeamstats', $teamstats->id) }}">
        @csrf
        @method('PATCH')
        <label>
            Victorias: <br>
            <input class="form-admin-black" value="{{ old('wins', $teamstats->wins) }}" type="text" name="wins">
            {!! $errors->first('wins', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            Derrotas: <br>
            <input class="form-admin-black" value="{{ old('losses', $teamstats->losses) }}" type="text" name="losses">
            {!! $errors->first('losses', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            Posicion en ranking: <br>
            <input class="form-admin-black" value="{{ old('ranking_position', $teamstats->ranking_position) }}" type="text" name="ranking_position">
            {!! $errors->first('ranking_position', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            Win-rate: <br>
            <input class="form-admin-black" value="{{ old('win_rate', $teamstats->win_rate) }}" type="text" name="win_rate">
            {!! $errors->first('win_rate', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            Lose-rate: <br>
            <input class="form-admin-black" value="{{ old('lose_rate', $teamstats->lose_rate)  }}" type="text" name="lose_rate">
            {!! $errors->first('lose_rate', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            Equipo <i>(tag)</i>:<br>
            <input class="form-admin-black" value="{{ old('shortName') }}" type="text" name="shortName">
            {!! $errors->first('shortName', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>

        <p></p>
        <button class="mt-5 mb-3 btn-admin">Modificar estadística</button>
    </form>
    <br>
    <a class="admin-back" href="{{ route('teamstats.showAllteamstats') }}">Atrás</a>
</div>

@endsection