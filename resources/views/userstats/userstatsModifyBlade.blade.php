@extends('layouts.app')

@section('content')
<h1> Modificar estadistica de usuario</h1>
<div class="text">
    <form method="POST" action="{{ route('userstats.updateUserstats', $userstats->id) }}">
        @csrf
        @method('PATCH')
        <label>
            Asesinatos: <br>
            <input class="form-admin-black" value="{{ old('kills', $userstats->kills) }}" type="text" name="kills">
            {!! $errors->first('kills', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            Asistencias: <br>
            <input class="form-admin-black" value="{{ old('assists', $userstats->assists) }}" type="text" name="assists">
            {!! $errors->first('assists', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            Muertes: <br>
            <input class="form-admin-black" value="{{ old('deaths', $userstats->deaths) }}" type="text" name="deaths">
            {!! $errors->first('deaths', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            Veces MVP: <br>
            <input class="form-admin-black" value="{{ old('times_mvp', $userstats->times_mvp) }}" type="text" name="times_mvp">
            {!! $errors->first('times_mvp', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            Win-rate: <br>
            <input class="form-admin-black" value="{{ old('win_rate', $userstats->win_rate) }}" type="text" name="win_rate">
            {!! $errors->first('win_rate', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            ADR:<br>
            <input class="form-admin-black" value="{{ old('adr', $userstats->adr) }}" type="text" name="adr">
            {!! $errors->first('adr', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            User <i>(nickname)</i><br>
            <input class="form-admin-black" value="{{ old('user_nick')}}" type="text" name="user_nick">
            {!! $errors->first('user_nick', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>

        <p></p>
        <button class="mt-5 mb-3 btn-admin">Modificar estadística</button>
    </form>
    <a class="admin-back" href="{{ route('userstats.showAlluserstats') }}">Atrás</a>
    <br>
</div>

@endsection