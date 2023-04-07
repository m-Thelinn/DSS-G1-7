<!DOCTYPE html>
@extends('layouts.app')
    <body>

    <h1>Estadísticas de equipo</h1>                                
    <div style="display:flex;">
        <a href="/"><input type="button" value="Atrás"></a>
        <a href="{{ route('teamstats.createTeamstats') }}"><input type="button" value="Añadir estadisticas"></a>

        <form method="GET" action="{{ route('teamstats.showAllteamstats') }}">
            <label for="orderBy">Ordenar por:</label>
            <select name="orderBy" id="orderBy">                           
                <option value="wins" {{ $orderBy == 'wins' ? 'selected' : '' }}>Victorias</option>
                <option value="losses" {{ $orderBy == 'losses' ? 'selected' : '' }}>Derrotas</option>
                <option value="ranking_position" {{ $orderBy == 'ranking_position' ? 'selected' : '' }}>Posicion</option>
                <option value="win_rate" {{ $orderBy == 'win_rate' ? 'selected' : '' }}>Win-rate</option>
                <option value="lose_rate" {{ $orderBy == 'lose_rate' ? 'selected' : '' }}>Loss-rate</option>
            </select>                                     
            <button type="submit">Ordenar</button>
        </form>        
                   
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>EQUIPO  </th>             
            <th>VICTORIAS  </th>
            <th>DERROTAS  </th>
            <th>POSICION EN RANKING  </th>
            <th>WIN RATE  </th>
            <th>LOSS RATE  </th>
        </tr>
        </thead>  
        @foreach ($teamstats as $stat)          
        <tr>
            <td>{{ $stat->team->name }}</td>                   
            <td>{{ $stat->wins }}</td>
            <td>{{ $stat->losses }}</td>   
            <td>{{ $stat->ranking_position }}</td>                
            <td>{{ $stat->win_rate }}</td> 
            <td>{{ $stat->lose_rate }}</td>                
            <td>                                        
                <a href="{{ route('teamstats.modifyTeamstats', $stat) }}"><input type="button" value="Actualizar">
                
                <form action="{{ route('teamstats.deleteTeamstats',  ['id' => $stat->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Eliminar</button>               
                </form>                                        
            </td>                                                                        
        </tr>        
        @endforeach     
    </table>
    {{ $teamstats->appends(['orderBy' => $orderBy])->links('custom-pagination', ['previous_label' => 'Anterior', 'next_label' => 'Siguiente']) }}
    </body>
</html>