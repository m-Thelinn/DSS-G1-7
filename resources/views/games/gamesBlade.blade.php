<!DOCTYPE html>
@extends('layouts.app')
    <body>

    <h1>Games</h1>                                
    <div style="display:flex;">
        <a href="/"><input type="button" value="Back"></a>
        <a href="{{ route('game.createGame') }}"><input type="button" value="Add Game"></a>
        
        <form method="GET" action="{{ route('game.showAllGames') }}">
            <label for="orderBy">Ordenar por:</label>
            <select name="orderBy" id="orderBy">                           
                <option value="date" {{ $orderBy == 'date' ? 'selected' : '' }}>FECHA</option>
                <option value="time" {{ $orderBy == 'time' ? 'selected' : '' }}>HORA</option>
                <option value="format" {{ $orderBy == 'format' ? 'selected' : '' }}>FORMATO</option>
                <option value="result" {{ $orderBy == 'result' ? 'selected' : '' }}>RESULTADO</option>
                <option value="local_id" {{ $orderBy == 'local_id' ? 'selected' : '' }}>EQUIPO LOCAL</option>
                <option value="visitante_id" {{ $orderBy == 'visitante_id' ? 'selected' : '' }}>EQUIPO VISITANTE</option>                
            </select>            
            <button type="submit">Ordenar</button>
        </form>

                   
    </div>
    <table class="table table-striped">
        <thead>
        <tr>            
            <th>FECHA |</th>
            <th>HORA |</th>
            <th>FORMATO |</th>
            <th>RESULTADO |</th>
            <th>EQUIPO LOCAL |</th>
            <th>EQUIPO VISITANTE |</th> 
            <th>ACCIONES</th>                
        </tr>
        </thead>  
        @foreach ($games as $game)          
        <tr>                
            <td>{{ $game->date }}</td>
            <td>{{ $game->time }}</td>   
            <td>{{ $game->format }}</td>                
            <td>{{ $game->result }}</td> 
            <td>{{ $game->local_id }}</td>                
            <td>{{ $game->visitante_id }}</td>   
                         
            <td>                                        
                <a href="{{ route('game.modifyGame', $game) }}"><input type="button" value="Update">
                
                <form action="{{ route('game.deleteGame',  ['id' => $game->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>               
                </form>                                        
            </td>                                                                        
        </tr>        
        @endforeach     
    </table>
    {{ $games->appends(['orderBy' => $orderBy])->links('custom-pagination', ['previous_label' => 'Anterior', 'next_label' => 'Siguiente']) }}
    </body>
</html>
