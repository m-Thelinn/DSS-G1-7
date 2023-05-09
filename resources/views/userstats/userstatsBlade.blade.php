@extends('layouts.app')
@section('content')
    <h1>Estadisticas de usuario</h1>                                
    <div class="mb-5 d-flex container align-items-center">
        <a class="btn-admin" href="{{ route('homeAdmin') }}"> Atrás</a>
        <a class="btn-admin" href="{{ route('userstats.createUserstats') }}"> Añadir estadisticas</a>

        <form method="GET" action="{{ route('userstats.showAlluserstats') }}">
            <label style="user-select:none;" for="orderBy">Ordenar por:</label>
            <select class="form-admin" name="orderBy" id="orderBy">                           
                <option value="kills" {{ $orderBy == 'kills' ? 'selected' : '' }}>Asesinatos</option>
                <option value="assists" {{ $orderBy == 'assists' ? 'selected' : '' }}>Asistencias</option>
                <option value="deaths" {{ $orderBy == 'deaths' ? 'selected' : '' }}>Muertes</option>
                <option value="times_mvp" {{ $orderBy == 'times_mvp' ? 'selected' : '' }}>Veces MVP</option>
                <option value="win_rate" {{ $orderBy == 'win_rate' ? 'selected' : '' }}>Win-rate</option>
                <option value="adr" {{ $orderBy == 'adr' ? 'selected' : '' }}>ADR</option>                
                <option value="user_id" {{ $orderBy == 'user_id' ? 'selected' : '' }}>ID</option>  
            </select>                                                  
            <button class="btn-admin" type="submit">Ordenar</button>             
        </form>
    </div>

    <table class="table text container">
        <thead>
        <tr>
            <th>USUARIO  </th>             
            <th>ASESINATOS  </th>
            <th>ASISTENCIAS  </th>
            <th>MUERTES  </th>
            <th>VECES MVP  </th>
            <th>WIN-RATE  </th>
            <th>ADR </th> 
            <th>ACCIONES </th> 
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
                <a href="{{ route('userstats.modifyUserstats', $stat) }}" class="btn-update">Actualizar</a>
                
                <form action="{{ route('userstats.deleteUserstats',  ['id' => $stat->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn-delete" type="submit">Eliminar</button>               
                </form>                                        
            </td>                                                                        
        </tr>        
        @endforeach     
    </table>
    {{ $userstats->appends(['orderBy' => $orderBy])->links('custom-pagination', ['previous_label' => 'Anterior', 'next_label' => 'Siguiente']) }}
@endsection