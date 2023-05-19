@extends('layouts.app')

@section('content')
    <h1 class="container mt-5 mb-5 page-title">Equipos</h1>                                
    <div class="mb-4 d-flex container align-items-center">
        <a class="btn-admin" href="/">Atrás</a>
        @if (optional(auth()->user())->rol === 0)
        <a class="btn-admin" href="{{ route('team.createTeam') }}">Añadir equipo</a>
        @endif  

        <form method="POST" action="{{ route('team.searchByName') }}">
            @csrf               
            <input class="adm-search"placeholder=" Nombre del Equipo" type="text" name="nombre">
            <button class="btn-admin">Buscar</button>
        </form>

        <form method="POST" action="{{ route('team.searchByid') }}">
            @csrf               
            <input class="adm-search" placeholder=" ID del Equipo" type="text" name="id">
            <button class="btn-admin">Buscar</button>
        </form>
    </div>
    <div class="mb-2 d-flex container">

        <form method="GET" action="{{ route('team.showAllTeams') }}">
            <select class="form-admin" name="orderBy" id="orderBy">            
                <option value="name" {{ $orderBy == 'name' ? 'selected' : '' }}>Nombre</option>
                <option value="short_name" {{ $orderBy == 'short_name' ? 'selected' : '' }}>Tag</option>
                <option value="description" {{ $orderBy == 'description' ? 'selected' : '' }}>Descripción</option>
                <option value="country" {{ $orderBy == 'country' ? 'selected' : '' }}>País</option>
                <option value="division" {{ $orderBy == 'division' ? 'selected' : '' }}>División</option>
            </select>
            <button  class="btn-admin" type="submit">Ordenar</button>
        </form>     
    </div>
    <table class="table text container">
        <thead>
        <tr>            
            <th>NOMBRE</th>
            <th>TAG</th>
            <th>DESCRIPCION</th>
            <th>ESCUDO</th>
            <th>REGIÓN</th>
            <th>DIVISION</th>
            <th>ACCIONES</th> 
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
                        
            <td>     
                <a href="{{ route('team.teamData',  ['id' => $team->id]) }}" class="btn-admin">Ver</a>
                
                @if (optional(auth()->user())->rol === 0) 
                <a href="{{ route('team.modifyTeam', $team) }}" class="btn-update">Actualizar</a>
                
                <form action="{{ route('team.deleteTeam',  ['id' => $team->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn-delete" type="submit">Eliminar</button>               
                </form>
                @endif

            </td>                                                                      
        </tr>        
        @endforeach  
        
    </table>
    {{ $teams->appends(['orderBy' => $orderBy])->links('custom-pagination', ['previous_label' => 'Anterior', 'next_label' => 'Siguiente']) }}
@endsection