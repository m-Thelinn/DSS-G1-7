<!DOCTYPE html>
@extends('layouts.app')
    <body>
    

            <h1> Crear nuevo partido</h1>
            <form method="POST" action="{{ route('game.addGame') }}">            
                @csrf
                <label>
                    Fecha (YYYY-MM-DD): <br>   
                    <input value="{{ old('date') }}" type="text" name="date">
                    {!! $errors->first('date', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                <p></p> 
                <label>
                    Hora (HH:MM:SS): <br>
                    <input value="{{ old('time') }}" type="text" name="time">
                    {!! $errors->first('time', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                <p></p> 
                <label>
                    Formato: <br>
                    <input value="{{ old('format') }}" type="text" name="format">
                    {!! $errors->first('format', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                <p></p> 
                <label>
                    Resultado: <br>
                    <input value="{{ old('result') }}" type="text" name="result">
                    {!! $errors->first('result', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                <p></p> 
                <label>
                    Local (short name): <br>
                    <input value="{{ old('local_id') }}" type="text" name="local_id">
                    {!! $errors->first('local_id', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                <p></p> 
                <label>
                    Visitante (short name):<br>
                    <input value="{{ old('visitante_id') }}" type="text" name="visitante_id">
                    {!! $errors->first('visitante_id', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                <p></p> 
                
                <p></p> 
                <button class="btn btn-primary">Crear Partido</button>
            </form>        
            <a href="{{ route('game.showAllGames') }}"><input type="button" value="Back"></a>    
    </body>
</html>