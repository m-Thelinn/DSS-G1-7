<!DOCTYPE html>
@extends('layouts.app')
    <body>
        <h1> Modificar partido</h1>
        <form method="POST" action="{{ route('game.updateGame', $game) }}">
            @csrf
            @method('PATCH')
            <label>
                Fecha (YYYY-MM-DD): <br>   
                <input value="{{ old('date') }}" type="date" name="date">
                {!! $errors->first('date', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Hora (HH:MM:SS): <br>
                <input value="{{ old('time') }}" type="time" name="time">
                {!! $errors->first('time', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label for="format">Formato:</label> <br>
                <select name="format" id="format">                           
                    <option value="0">BO1</option>
                    <option value="1">BO3</option>
                    <option value="2">BO5</option>
                </select>    
            </label>
            <p></p> 
            <label for="result">Resultado:</label> <br>
                <select name="result" id="result">                           
                    <option value="0">Proximamente</option>
                    <option value="1">Jugando</option>
                    <option value="2">Gana equipo local</option>
                    <option value="3">Gana equipo visitante</option>          
                </select>    
            </label>
            <p></p> 
            <label>
                Equipo local (tag): <br>
                <input value="{{ old('local_id') }}" type="text" name="local_id">
                {!! $errors->first('local_id', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Equipo visitante (tag):<br>
                <input value="{{ old('visitante_id') }}" type="text" name="visitante_id">
                {!! $errors->first('visitante_id', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            
            <p></p> 
            <button class="btn btn-primary">Modificar Partido</button>
        </form>                    
        <br>
        <a href="{{ route('game.showAllGames') }}"><input type="button" value="Back"></a>          
    </body>
</html>
