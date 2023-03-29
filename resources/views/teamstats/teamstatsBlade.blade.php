<!DOCTYPE html>
    <body>

    <h1>TeamStats</h1>                                
    <div style="display:flex;">
        <a href="/"><input type="button" value="Back"></a>
        <a href="{{ route('teamstats.createTeamstats') }}"><input type="button" value="Add Stats"></a>
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
                <a href="#"><input type="button" value="Update">
                
                <form action="#" method="POST">
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
