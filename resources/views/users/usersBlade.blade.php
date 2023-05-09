@extends('layouts.app')

@section('content')
    <h1>Usuarios</h1>                                
    <div class="mb-5 d-flex container align-items-center">
        <a class="btn-admin" href="{{ route('homeAdmin') }}"> Atrás</a>
        @if (optional(auth()->user())->rol === 0)
        <a class="btn-admin" href="{{ route('user.createUser') }}"> Nuevo usuario</a>
        @endif

        <form method="GET" action="{{ route('user.showAllUsers') }}">
            <label style="user-select:none;" for="orderBy">Ordenar por:</label>
            <select class="form-admin" name="orderBy" id="orderBy">                           
                <option value="name" {{ $orderBy == 'name' ? 'selected' : '' }}>Nombre</option>
                <option value="lastname" {{ $orderBy == 'lastname' ? 'selected' : '' }}>Apellidos</option>
                <option value="nickname" {{ $orderBy == 'nickname' ? 'selected' : '' }}>Nickname</option>
                <option value="email" {{ $orderBy == 'email' ? 'selected' : '' }}>Email</option>
                <option value="phone" {{ $orderBy == 'phone' ? 'selected' : '' }}>Teléfono</option>
                <option value="country" {{ $orderBy == 'country' ? 'selected' : '' }}>País</option>
                <option value="team_id" {{ $orderBy == 'team_id' ? 'selected' : '' }}>Equipo</option>
                <option value="rol" {{ $orderBy == 'rol' ? 'selected' : '' }}>Rol</option>                
            </select>                       
            <button class="btn-admin" type="submit">Ordenar</button>
        </form>        
    </div>
    
    <table class="table text container">
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
            <th>ACCIONES</th>                 
        </tr>
        </thead>  
        @foreach ($users as $user)          
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
            @elseif( $user->rol === 4)
                <td>Fan</td>
            @else
                <td>Admin</td>
            @endif
            @if (optional(auth()->user())->rol === 0)
            <td>                                        
                <a href="{{ route('user.modifyUser', $user) }}" class="btn-update">Actualizar</a>
                
                <form action="{{ route('user.deleteUser',  ['id' => $user->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn-delete" type="submit">Eliminar</button>               
                </form> 
                                                       
            </td>  
            @endif                                                                      
        </tr>        
        @endforeach     
    </table>
    {{ $users->appends(['orderBy' => $orderBy])->links('custom-pagination', ['previous_label' => 'Anterior', 'next_label' => 'Siguiente']) }}

@endsection
