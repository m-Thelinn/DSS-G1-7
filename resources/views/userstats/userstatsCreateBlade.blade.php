<!DOCTYPE html>
@extends('layouts.app')
    <body>
    

            <h1> Crear nueva estadistica de usuario</h1>
            <form method="POST" action="{{ route('userstats.addUserstats') }}">                        
                @csrf
                <label>
                    Kills: <br>   
                    <input value="{{ old('kills') }}" type="text" name="kills">
                    {!! $errors->first('kills', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                <p></p> 
                <label>
                    Assists: <br>
                    <input value="{{ old('assists') }}" type="text" name="assists">
                    {!! $errors->first('assists', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                <p></p> 
                <label>
                    Deaths: <br>
                    <input value="{{ old('deaths') }}" type="text" name="deaths">
                    {!! $errors->first('deaths', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                <p></p> 
                <label>
                    Times mvp: <br>
                    <input value="{{ old('times_mvp') }}" type="text" name="times_mvp">
                    {!! $errors->first('times_mvp', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                <p></p> 
                <label>
                    Win rate: <br>
                    <input value="{{ old('win_rate') }}" type="text" name="win_rate">
                    {!! $errors->first('win_rate', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                <p></p> 
                <label>
                    Adr:<br>
                    <input value="{{ old('adr') }}" type="text" name="adr">
                    {!! $errors->first('adr', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                <p></p> 
                <label>
                    User (nickname):<br>
                    <input value="{{ old('user_nick') }}" type="text" name="user_nick">
                    {!! $errors->first('user_nick', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                
                <p></p> 
                <button class="btn btn-primary">Crear Estadística</button>
            </form>
            <a href="{{ route('userstats.showAlluserstats') }}"><input type="button" value="Back"></a>
    </body>
</html>