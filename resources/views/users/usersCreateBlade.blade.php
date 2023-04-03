<!DOCTYPE html>
    <body>
            <h1> Crear nuevo usuario</h1>
            
            <form method="POST" action="{{ route('user.addUser') }}">            
                @csrf
                <label>
                    Nombre: <br>   
                    <input value="{{ old('name') }}" type="text" name="name">
                    {!! $errors->first('name', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                <p></p> 
                <label>
                    Apellidos: <br>
                    <input value="{{ old('lastname') }}" type="text" name="lastname">
                    {!! $errors->first('lastname', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                <p></p> 
                <label>
                    Nickname: <br>
                    <input value="{{ old('nickname') }}" type="text" name="nickname">
                    {!! $errors->first('nickname', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                <p></p> 
                <label>
                    Email: <br>
                    <input value="{{ old('email') }}" type="text" name="email">
                    {!! $errors->first('email', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                <p></p> 
                <label>
                    Telefono: <br>
                    <input value="{{ old('phone') }}" type="text" name="phone">
                    {!! $errors->first('phone', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                <p></p>
                <label>
                    Contraseña: <br>
                    <input value="{{ old('password') }}" type="password" name="password">
                    {!! $errors->first('password', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                <p></p>
                <label>
                    Pais: <br>
                    <input value="{{ old('country') }}" type="text" name="country">
                    {!! $errors->first('country', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                
                <p></p>
                    <label for="rol">Rol:</label> <br>
                    <select name="rol" id="rol">                           
                        <option value="0">Admin</option>
                        <option value="1">Jugador</option>
                        <option value="2">Coach</option>
                        <option value="3">Manager</option>          
                    </select>       
                <p></p> 

                <label>
                    Equipo (Nombre):<br>
                    <input value="{{ old('team_id') }}" type="text" name="team_id">
                    {!! $errors->first('team_id', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                <p></p>
                
                <p></p> 
                <button class="btn btn-primary">Crear usuario</button>
                
            </form>
            <a href="{{ route('user.showAllUsers') }}"><input type="button" value="Back"></a>

    </body>
</html>