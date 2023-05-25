@extends('layouts.app')

@section('content')
    <h1>Equipos</h1>  
        
    <table>
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
                    <td>                                        
                        <a href="{{ route('team.modifyTeam', $team) }}"><input type="button" value="Actualizar">
                        
                        <form action="{{ route('team.deleteTeam',  ['id' => $team->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Eliminar</button>               
                        </form>                                        
                    </td>
                </tr>
            @endforeach
            
        
    </table>
    <a href="{{ route('team.showAllTeams') }}"><input type="button" value="Atrás"></a>
    
@endsection
