@extends('layouts.app')

@section('content')
    <h1 class="mt-5 admin-subtitle" >Modificar usuario</h1>
    <div class="text">
        <form method="POST" action="{{ route('user.updateUser', $user) }}">
            @csrf
            @method('PATCH')
            <label>
                Nombre: <br>   
                <input class="form-admin-black" value="{{ old('name', $user->name) }}" type="text" name="name">
                {!! $errors->first('name', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Apellidos: <br>
                <input class="form-admin-black" value="{{ old('lastname', $user->lastname) }}" type="text" name="lastname">
                {!! $errors->first('lastname', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Nickname: <br>
                <input class="form-admin-black" value="{{ old('nickname', $user->nickname) }}" type="text" name="nickname">
                {!! $errors->first('nickname', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Email: <br>
                <input class="form-admin-black" value="{{ old('email', $user->email) }}" type="text" name="email">
                {!! $errors->first('email', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Telefono: <br>
                <input class="form-admin-black" value="{{ old('phone', $user->phone) }}" type="text" name="phone">
                {!! $errors->first('phone', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p>
            <label>
                Contraseña: <br>
                <input class="form-admin-black" value="{{ old('password', $user->password) }}" type="password" name="password">
                {!! $errors->first('password', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p>
            <label>
                Pais: <br>
                <input class="form-admin-black" value="{{ old('country', $user->country) }}" type="text" name="country">
                {!! $errors->first('country', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p>
            <label>
                Equipo <i>(Nombre):</i><br>
                <input class="form-admin-black" value="{{ old('team_id', $user->team->name) }}" type="text" name="team_id">
                {!! $errors->first('team_id', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p>
            <label for="rol">Rol:</label> <br>
                <select class="form-admin-black" name="rol" id="rol">                           
                    <option value="0">Admin</option>
                    <option value="1">Jugador</option>
                    <option value="2">Coach</option>
                    <option value="3">Manager</option>
                    <option value="4">Fan</option>          
                </select> 
            <p></p> 
                
            <p></p> 
            <button class="mt-5 mb-3 btn-admin">Modificar usuario</button>
        </form>

        <a class="admin-back" href="{{ route('user.showAllUsers') }}">Atrás</a>             
        <br>
    </div>
    
@endsection
