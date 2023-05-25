@extends('layouts.app')

@section('content')
<h1 class="mt-5 admin-subtitle"> Crear nuevo equipo</h1>
<div class="text">
    <form method="POST" action="{{ route('team.addTeam') }}">
        @csrf
        <label>
            Nombre: <br>
            <input class="form-admin-black" value="{{ old('name') }}" type="text" name="name">
            {!! $errors->first('name', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            Abreviatura: <br>
            <input class="form-admin-black" value="{{ old('short_name') }}" type="text" name="short_name">
            {!! $errors->first('short_name', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            Descripcion: <br>
            <textarea class="form-admin-black" value="{{ old('description') }}" type="text" name="description" rows=8></textarea>
            {!! $errors->first('description', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            Enlace de foto: <br>
            <input class="form-admin-black" value="{{ old('picture') }}" type="text" name="picture">
            {!! $errors->first('picture', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            Región: <br>
            <input class="form-admin-black" value="{{ old('country') }}" type="text" name="country">
            {!! $errors->first('country', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>
        <label>
            Division:<br>
            <input class="form-admin-black" value="{{ old('division') }}" type="text" name="division">
            {!! $errors->first('division', '<br><small class="text-danger">:message</small><br>') !!}
        </label>
        <p></p>

        <p></p>
        <button class="mt-5 mb-3 btn-admin">Crear equipo</button>
    </form>
    <a class="admin-back" href="{{ route('team.showAllTeams') }}">Atrás</a>
</div>

@endsection