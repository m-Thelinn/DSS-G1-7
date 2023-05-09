@extends('layouts.app')

@section('content')
    <h1>Equipos</h1>                                
    <div style="display:flex;">
        <a href="{{ route('homeAdmin') }}"><input type="button" value="Atrás"></a>
        @if (optional(auth()->user())->rol === 0)
        <a href="{{ route('team.createTeam') }}"><input type="button" value="Añadir equipo"></a>      
        @endif  
        <div>
            <form method="POST" action="{{ route('team.searchByName') }}">
                @csrf               
                <input placeholder="Nombre del Equipo" type="text" name="nombre">
                <button class="btn-dark">Buscar</button>
            </form>
            <form method="POST" action="{{ route('team.searchByid') }}">
                @csrf               
                <input placeholder="ID del Equipo" type="text" name="id">
                <button class="btn-dark">Buscar</button>
            </form>
        </div>
        <form method="GET" action="{{ route('team.showAllTeams') }}">
            <label for="orderBy">Ordenar por:</label>
            <select name="orderBy" id="orderBy">            
                <option value="name" {{ $orderBy == 'name' ? 'selected' : '' }}>Nombre</option>
                <option value="short_name" {{ $orderBy == 'short_name' ? 'selected' : '' }}>Tag</option>
                <option value="description" {{ $orderBy == 'description' ? 'selected' : '' }}>Descripción</option>
                <option value="country" {{ $orderBy == 'country' ? 'selected' : '' }}>Pais</option>
                <option value="division" {{ $orderBy == 'division' ? 'selected' : '' }}>División</option>
            </select>
            
            <button type="submit">Ordenar</button>
        </form>

                   
    </div>
    <table class="table text">
        <thead>
        <tr>            
            <th>NOMBRE</th>
            <th>TAG</th>
            <th>DESCRIPCION</th>
            <th>ESCUDO</th>
            <th>PAIS</th>
            <th>DIVISION</th> 
        </tr>
        </thead>  
        @foreach ($teams as $team)          
        <tr>        
            <td>{{ $team->name }}</td>
            <td>{{ $team->short_name }}</td>   
            <td>{{ $team->description }}</td>                
            <td><img src = "{{ $team->picture }}" width="40" height="40" alt="img"></td>                
            <td>{{ $team->country }}</td>                
            <td>{{ $team->division }}</td>   
            @if (optional(auth()->user())->rol === 0)             
            <td>                                        
                <a href="{{ route('team.modifyTeam', $team) }}"><input type="button" value="Actualizar">
                
                <form action="{{ route('team.deleteTeam',  ['id' => $team->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Eliminar</button>               
                </form>                                        
            </td>  
            @endif                                                                      
        </tr>        
        @endforeach  
        
    </table>
    {{ $teams->appends(['orderBy' => $orderBy])->links('custom-pagination', ['previous_label' => 'Anterior', 'next_label' => 'Siguiente']) }}
@endsection