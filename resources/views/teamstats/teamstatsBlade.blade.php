<!DOCTYPE html>
@extends('layouts.app')
    <body>

    <h1>TeamStats</h1>                                
    <div style="display:flex;">
        <a href="/"><input type="button" value="Back"></a>
        <a href="{{ route('teamstats.createTeamstats') }}"><input type="button" value="Add Stats"></a>

        <form method="GET" action="{{ route('teamstats.showAllteamstats') }}">
            <label for="orderBy">Ordenar por:</label>
            <select name="orderBy" id="orderBy">                           
                <option value="wins" {{ $orderBy == 'wins' ? 'selected' : '' }}>WINS</option>
                <option value="losses" {{ $orderBy == 'losses' ? 'selected' : '' }}>LOSSES</option>
                <option value="ranking_position" {{ $orderBy == 'ranking_position' ? 'selected' : '' }}>RANKING POSITION</option>
                <option value="win_rate" {{ $orderBy == 'win_rate' ? 'selected' : '' }}>WIN RATE</option>
                <option value="lose_rate" {{ $orderBy == 'lose_rate' ? 'selected' : '' }}>LOSE RATE</option>
                <option value="team_id" {{ $orderBy == 'team_id' ? 'selected' : '' }}>TEAM ID</option>                
            </select>                                     
            <button type="submit">Ordenar</button>
        </form>        
                   
    </div>
    <table class="table table-striped">
        <thead>
        <tr>            
            <th>WINS |</th>
            <th>LOSSES |</th>
            <th>RANKING POSITION |</th>
            <th>WIN RATE |</th>
            <th>LOSE RATE |</th>
            <th>TEAM ID |</th> 
            <th>ACCIONES</th>                
        </tr>
        </thead>  
        @foreach ($teamstats as $stat)          
        <tr>                
            <td>{{ $stat->wins }}</td>
            <td>{{ $stat->losses }}</td>   
            <td>{{ $stat->ranking_position }}</td>                
            <td>{{ $stat->win_rate }}</td> 
            <td>{{ $stat->lose_rate }}</td>                
            <td>{{ $stat->team_id }}</td>   
                         
            <td>                                        
                <a href="{{ route('teamstats.modifyTeamstats', $stat) }}"><input type="button" value="Update">
                
                <form action="{{ route('teamstats.deleteTeamstats',  ['id' => $stat->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>               
                </form>                                        
            </td>                                                                        
        </tr>        
        @endforeach     
    </table>
    {{ $teamstats->appends(['orderBy' => $orderBy])->links('custom-pagination', ['previous_label' => 'Anterior', 'next_label' => 'Siguiente']) }}
    </body>
</html>