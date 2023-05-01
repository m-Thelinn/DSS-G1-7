<!DOCTYPE html>
@extends('layouts.app')
    <body>

    <h1>Estadisticas de usuario</h1>                                
    <div style="display:flex;">
        <a href="{{ route('homeAdmin') }}"><input type="button" value="Atrás"></a>
        <a href="{{ route('userstats.createUserstats') }}"><input type="button" value="Añadir estadísticas"></a>
        <form method="GET" action="{{ route('userstats.showAlluserstats') }}">
            <label for="orderBy">Ordenar por:</label>
            <select name="orderBy" id="orderBy">                           
                <option value="kills" {{ $orderBy == 'kills' ? 'selected' : '' }}>Asesinatos</option>
                <option value="assists" {{ $orderBy == 'assists' ? 'selected' : '' }}>Asistencias</option>
                <option value="deaths" {{ $orderBy == 'deaths' ? 'selected' : '' }}>Muertes</option>
                <option value="times_mvp" {{ $orderBy == 'times_mvp' ? 'selected' : '' }}>Veces MVP</option>
                <option value="win_rate" {{ $orderBy == 'win_rate' ? 'selected' : '' }}>Win-rate</option>
                <option value="adr" {{ $orderBy == 'adr' ? 'selected' : '' }}>ADR</option>                
                <option value="user_id" {{ $orderBy == 'user_id' ? 'selected' : '' }}>ID</option>  
            </select>                                                  
            <button type="submit">Ordenar</button>             
        </form>

                   
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>USUARIO  </th>             
            <th>ASESINATOS  </th>
            <th>ASISTENCIAS  </th>
            <th>MUERTES  </th>
            <th>VECES MVP  </th>
            <th>WIN-RATE  </th>
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
                <a href="{{ route('userstats.modifyUserstats', $stat) }}"><input type="button" value="Actualizar">
                
                <form action="{{ route('userstats.deleteUserstats',  ['id' => $stat->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Eliminar</button>               
                </form>                                        
            </td>                                                                        
        </tr>        
        @endforeach     
    </table>
    {{ $userstats->appends(['orderBy' => $orderBy])->links('custom-pagination', ['previous_label' => 'Anterior', 'next_label' => 'Siguiente']) }}

    </body>
</html>