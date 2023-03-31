<!DOCTYPE html>
    <body>

    <h1>Games</h1>                                
    <div style="display:flex;">
        <a href="/"><input type="button" value="Back"></a>
        <a href="{{ route('game.createGame') }}"><input type="button" value="Add Game"></a>
        <form class="form-inline">
            <label for="ordenar">Ordenar por:</label>
            <div class="form-group">
            
                <select class="form-select" multiple aria-label="multiple select example"  id="ordenarUser" name="ordenarUser" [(ngModel)]="department">
                    <option value="id">id</option>
                    <option value="nombre">Nombre</option>
                    <option value="apellidos">Apellidos</option>
                    <option value="email">Email</option>
                </select>
            </div>
            <button class="btn btn-dark mt-2" type="submit">Ordenar</button>
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
    
    </body>
</html>
