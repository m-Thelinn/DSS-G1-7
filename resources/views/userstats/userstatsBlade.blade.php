<!DOCTYPE html>
    <body>

    <h1>UserStats</h1>                                
    <div style="display:flex;">
        <a href="/"><input type="button" value="Back"></a>
        <a href="{{ route('userstats.createUserstats') }}"><input type="button" value="Add Stats"></a>
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
            <th>KILLS |</th>
            <th>ASSISTS |</th>
            <th>DEATHS |</th>
            <th>TIMES MVP |</th>
            <th>WIN RATE |</th>
            <th>ADR |</th> 
            <th>USER ID |</th> 
            <th>ACCIONES</th>                
        </tr>
        </thead>  
        @foreach ($userstats as $stat)          
        <tr>                
            <td>{{ $stat->kills }}</td>
            <td>{{ $stat->assists }}</td>   
            <td>{{ $stat->deaths }}</td>                
            <td>{{ $stat->times_mvp }}</td> 
            <td>{{ $stat->win_rate }}</td>                
            <td>{{ $stat->adr }}</td>   
            <td>{{ $stat->user_id }}</td>            
                         
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
    
    </body>
</html>