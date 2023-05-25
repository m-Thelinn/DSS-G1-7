@extends('layouts.app')

@section ('content')
<div class="container text">
    <h1 class="mt-5 admin-subtitle"> Modificar equipo</h1>
        <form method="POST" action="{{ route('team.updateTeam', $team) }}">
            @csrf
            @method('PATCH')
            <label>
                Nombre: <br>   
                <input class="form-admin-black" value="{{ old('name', $team->name) }}" type="text" name="name">
                {!! $errors->first('name', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Abreviatura: <br>
                <input class="form-admin-black" value="{{ old('short_name', $team->short_name) }}" type="text" name="short_name">
                {!! $errors->first('short_name', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Descripcion: <br>
                <input class="form-admin-black" value="{{ old('description', $team->description) }}" type="text" name="description">
                {!! $errors->first('description', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Enlace Foto: <br>
                <input class="form-admin-black" value="{{ old('picture', $team->picture) }}" type="text" name="picture">
                {!! $errors->first('picture', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Pais: <br>
                <input class="form-admin-black" value="{{ old('country', $team->country) }}" type="text" name="country">
                {!! $errors->first('country', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Division:<br>
                <input class="form-admin-black" value="{{ old('division', $team->division) }}" type="text" name="division">
                {!! $errors->first('division', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            
            <p></p> 
            <button class="mt-5 mb-3 btn-admin">Modificar Equipo</button>
        </form>                    
    <br>
    <a class="admin-back" href="{{ route('team.showAllTeams') }}">Atrás</a>
</div>
        
@endsection