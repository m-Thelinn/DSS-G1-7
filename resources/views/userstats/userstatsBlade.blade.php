<!DOCTYPE html>
@extends('layouts.app')
    <body>

    <h1>UserStats</h1>                                
    <div style="display:flex;">
        <a href="/"><input type="button" value="Back"></a>
        <a href="{{ route('userstats.createUserstats') }}"><input type="button" value="Add Stats"></a>
        <form method="GET" action="{{ route('userstats.showAlluserstats') }}">
            <label for="orderBy">Ordenar por:</label>
            <select name="orderBy" id="orderBy">                           
                <option value="kills" {{ $orderBy == 'kills' ? 'selected' : '' }}>KILLS</option>
                <option value="assists" {{ $orderBy == 'assists' ? 'selected' : '' }}>ASSISTS</option>
                <option value="deaths" {{ $orderBy == 'deaths' ? 'selected' : '' }}>DEATHS</option>
                <option value="times_mvp" {{ $orderBy == 'times_mvp' ? 'selected' : '' }}>TIMES MVP</option>
                <option value="win_rate" {{ $orderBy == 'win_rate' ? 'selected' : '' }}>WIN RATE</option>
                <option value="adr" {{ $orderBy == 'adr' ? 'selected' : '' }}>ADR</option>                
                <option value="user_id" {{ $orderBy == 'user_id' ? 'selected' : '' }}>USER ID</option>  
            </select>                                                  
            <button type="submit">Ordenar</button>             
        </form>

                   
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>USUARIO |</th>             
            <th>KILLS |</th>
            <th>ASSISTS |</th>
            <th>DEATHS |</th>
            <th>VECES MVP |</th>
            <th>WIN RATE |</th>
            <th>ADR |</th> 
        </tr>
        </thead>  
        @foreach ($userstats as $stat)          
        <tr>
            <td>{{ $stat->user->name }}</td>                     
            <td>{{ $stat->kills }}</td>
            <td>{{ $stat->assists }}</td>   
            <td>{{ $stat->deaths }}</td>                
            <td>{{ $stat->times_mvp }}</td> 
            <td>{{ $stat->win_rate }}</td>                
            <td>{{ $stat->adr }}</td>   
                         
            <td>                                        
                <a href="{{ route('userstats.modifyUserstats', $stat) }}"><input type="button" value="Update">
                
                <form action="{{ route('userstats.deleteUserstats',  ['id' => $stat->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>               
                </form>                                        
            </td>                                                                        
        </tr>        
        @endforeach     
    </table>
    {{ $userstats->appends(['orderBy' => $orderBy])->links('custom-pagination', ['previous_label' => 'Anterior', 'next_label' => 'Siguiente']) }}

    </body>
</html>