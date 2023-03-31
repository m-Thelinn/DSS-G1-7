<!DOCTYPE html>
@extends('layouts.app')
    <body>
        

        <h1> Modificar equipo</h1>
        <form method="POST" action="{{ route('team.updateTeam', $team) }}">
            @csrf
            @method('PATCH')
            <label>
                Nombre: <br>   
                <input value="{{ old('name') }}" type="text" name="name">
                {!! $errors->first('name', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Abreviatura: <br>
                <input value="{{ old('short_name') }}" type="text" name="short_name">
                {!! $errors->first('short_name', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Descripcion: <br>
                <input value="{{ old('description') }}" type="text" name="description">
                {!! $errors->first('description', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Enlace Foto: <br>
                <input value="{{ old('picture') }}" type="text" name="picture">
                {!! $errors->first('picture', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Pais: <br>
                <input value="{{ old('country') }}" type="text" name="country">
                {!! $errors->first('country', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Division:<br>
                <input value="{{ old('division') }}" type="text" name="division">
                {!! $errors->first('division', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            
            <p></p> 
            <button class="btn btn-primary">Modificar Equipo</button>
        </form>                    
        <br>
                 
    </body>
</html>
