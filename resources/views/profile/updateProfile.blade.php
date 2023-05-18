@extends('layouts.app')

@section('content')
<div class="container text">
    <h1 class="section-title">MODIFICAR PERFIL</h1>
    <div>
        <form method="POST" action="{{ route('profile.updateProfile', $user) }}">
            @csrf
            @method('PATCH')
            <label>
                Nombre: <br>   
                <input class="form-profile" value="{{ old('name', $user->name) }}" type="text" name="name">
                {!! $errors->first('name', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Apellidos: <br>
                <input class="form-profile" value="{{ old('lastname', $user->lastname) }}" type="text" name="lastname">
                {!! $errors->first('lastname', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Nickname: <br>
                <input class="form-profile" value="{{ old('nickname', $user->nickname) }}" type="text" name="nickname">
                {!! $errors->first('nickname', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Email: <br>
                <input class="form-profile" value="{{ old('email', $user->email) }}" type="text" name="email">
                {!! $errors->first('email', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Telefono: <br>
                <input class="form-profile" value="{{ old('phone', $user->phone) }}" type="text" name="phone">
                {!! $errors->first('phone', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p>
            <label>
                Contraseña: <br>
                <input class="form-profile" value="{{ old('password') }}" type="password" name="password">
                {!! $errors->first('password', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p>
            <label>
                Pais: <br>
                <input class="form-profile" value="{{ old('country', $user->country) }}" type="text" name="country">
                {!! $errors->first('country', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p>
            <label>
                Equipo <i>(Nombre)</i>: <br>
                <input class="form-profile" value="{{ old('team_id', $user->team->name) }}" type="text" name="team_id">
                {!! $errors->first('team_id', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 

            <label for="rol">Rol:</label> <br>
                <select class="form-profile" name="rol" id="rol">                           
                    <option value="0">Admin</option>
                    <option value="1">Jugador</option>
                    <option value="2">Coach</option>
                    <option value="3">Manager</option>          
                </select> 
            
            <p></p> 
            <button class="btn btn-admin mt-3">Modificar perfil</button>
        </form>
    </div>

    <a class="text-back" href="{{ route('profile.showProfile') }}">Atrás</a>             
</div>
@endsection