@extends('layouts.app')
@section('content')
    <h1>Partidos</h1>                                
    <div class="mb-5 d-flex container align-items-center">
        <a class="btn-admin" href="/">Atrás</a>
        @if (optional(auth()->user())->rol === 0)
        <a class="btn-admin" href="{{ route('game.createGame') }}">Añadir partido</a>
        @endif
        
        <form method="GET" action="{{ route('game.showAllGames') }}">
            <label style="user-select:none;" for="orderBy">Ordenar por:</label>
            <select class="form-admin" name="orderBy" id="orderBy">                           
                <option value="date" {{ $orderBy == 'date' ? 'selected' : '' }}>Fecha</option>
                <option value="time" {{ $orderBy == 'time' ? 'selected' : '' }}>Hora</option>
                <option value="format" {{ $orderBy == 'format' ? 'selected' : '' }}>Formato</option>
                <option value="result" {{ $orderBy == 'result' ? 'selected' : '' }}>Estado</option>
                <option value="local_id" {{ $orderBy == 'local_id' ? 'selected' : '' }}>Local</option>
                <option value="visitante_id" {{ $orderBy == 'visitante_id' ? 'selected' : '' }}>Visitante</option>                
            </select>            
            <button class="btn-admin" type="submit">Ordenar</button>
        </form>

                   
    </div>
    <table class="table text container">
        <thead>
        <tr>            
            <th>FECHA  </th>
            <th>HORA  </th>
            <th>FORMATO  </th>
            <th>ESTADO  </th>
            <th>EQUIPO LOCAL  </th>
            <th>EQUIPO VISITANTE  </th>
            <th>ACCIONES  </th> 

        </tr>
        </thead>  
        @foreach ($games as $game)          
        <tr>                
            <td>{{ $game->date }}</td>
            <td>{{ $game->time }}</td>
            @if( $game->format === 0)
                <td>BO1</td>
            @elseif( $game->format === 1)
                <td>BO3</td>
            @else
                <td>BO5</td>
            @endif

            @if( $game->result === 0)
                <td>Proximamente</td>
            @elseif( $game->result === 1)
                <td>En juego</td>
            @elseif( $game->result === 2)
                <td>Gana equipo local</td>
            @else
                <td>Gana equipo visitante</td>
            @endif  
            <td>
                <a href="{{ route('team.teamData',  ['id' => $game->local]) }}">
                    <img src="{{ $game->local->picture}}" width="50" height="50">
                </a>
            </td>                
            <td>
                <a href="{{ route('team.teamData',  ['id' => $game->visitante]) }}">
                    <img src="{{ $game->visitante->picture}}" width="50" height="50">
                </a>
            </td>
            <td>
                
                <a href="https://www.twitch.tv/" target="_blank" class="btn-profile">Ver partido</a>
                @if (optional(auth()->user())->rol === 0)                                   
                    <a href="{{ route('game.modifyGame', $game) }}" class="btn-update">Actualizar</a>
                    
                    <form action="{{ route('game.deleteGame',  ['id' => $game->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn-delete" type="submit">Eliminar</button>               
                    </form>
                @endif                                         
            </td> 
                                                                            
        </tr>        
        @endforeach     
    </table>
    {{ $games->appends(['orderBy' => $orderBy])->links('custom-pagination', ['previous_label' => 'Anterior', 'next_label' => 'Siguiente']) }}
@endsection
