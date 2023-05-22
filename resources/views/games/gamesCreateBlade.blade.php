@extends('layouts.app')
@section('content')
<h1> Crear nuevo partido</h1>
<div class="text">
    <form method="POST" action="{{ route('game.addGame') }}">
        @csrf
        <label>
            Fecha (YYYY-MM-DD): <br>
            <input class="form-admin-black" value="{{ old('date') }}" type="date" name="date">
            {!! $errors->first('date', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            Hora (HH:MM:SS): <br>
            <input class="form-admin-black" value="{{ old('time') }}" type="time" name="time">
            {!! $errors->first('time', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label for="format">Formato:</label> <br>
        <select class="form-admin-black" name="format" id="format">
            <option value="0">BO1</option>
            <option value="1">BO3</option>
            <option value="2">BO5</option>
        </select>
        </label>
        <p></p>
        <label for="result">Resultado:</label> <br>
        <select class="form-admin-black" name="result" id="result">
            <option value="0">Proximamente</option>
            <option value="1">Jugando</option>
            <option value="2">Gana equipo local</option>
            <option value="3">Gana equipo visitante</option>
        </select>
        </label>
        <p></p>
        <label>
            Equipo local <i>(tag) </i> <br>
            <input class="form-admin-black" value="{{ old('local_id') }}" type="text" name="local_id">
            {!! $errors->first('local_id', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            Equipo visitante <i>(tag)</i><br>
            <input class="form-admin-black" value="{{ old('visitante_id') }}" type="text" name="visitante_id">
            {!! $errors->first('visitante_id', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>

        <p></p>
        <button class="mt-5 mb-3 btn-admin">Crear Partido</button>
    </form>
    <a class="admin-back" href="{{ route('game.showAllGames') }}">Atrás</a>
</div>

@endsection