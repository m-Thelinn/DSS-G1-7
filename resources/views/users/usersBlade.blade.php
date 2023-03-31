<!DOCTYPE html>
    <body>

    <h1>Usuarios</h1>                                
    <div style="display:flex; margin-bottom: 30px;">
        <a href="/"><input type="button" value="Back"></a>
        <a href="{{ route('user.createUser') }}"><input type="button" value="Add User"></a>
        <form class="form-inline">
            <div class="form-group" style="margin-left: 10px;"> Ordenar por:
                <select id="ordenarUser" name="ordenarUser" [(ngModel)]="department">
                    <option value="nombre">Nombre</option>
                    <option value="apellidos">Apellidos</option>
                    <option value="nickname">Nickname</option>
                </select>
                <button type="submit">Ordenar</button>         
            </div>
        </form>
        <form method="POST" action="{{ route('team.searchByName') }}" style="margin-left: 10px;">
            @csrf
                <input placeholder="Nickname" type="text" name="nickname">
            <button class="btn-dark">Buscar</button>
        </form>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>            
            <th>NOMBRE</th>
            <th>NICKNAME</th>
            <th>APELLIDOS</th>
            <th>PAIS</th>
            <th>EQUIPO</th>
            <th>EMAIL</th>
            <th>TELEFONO</th> 
            <th>ROL</th>                
        </tr>
        </thead>  
        @foreach ($users->sortBy('name') as $user)          
        <tr>        
            <td>{{ $user->name }}</td>
            <td>"{{ $user->nickname }}"</td>                
            <td>{{ $user->lastname }}</td>   
            <td>{{ $user->country }}</td>                
            <td>{{ $user->team->name }}</td>
            <td>{{ $user->email }}</td>                
            <td>{{ $user->phone }}</td>
            @if( $user->rol === 1)
                <td>Jugador</td>
            @elseif( $user->rol === 2)
                <td>Coach</td>
            @elseif( $user->rol === 3)
                <td>Manager</td>
            @else
                <td>Admin</td>
            @endif
            <td>                                        
                <a href="{{ route('user.modifyUser', $user) }}"><input type="button" value="Update">
                
                <form action="{{ route('user.deleteUser',  ['id' => $user->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>               
                </form>                                        
            </td>                                                                        
        </tr>        
        @endforeach     
    </table>
    
    </body>
</html>
