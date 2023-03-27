<!DOCTYPE html>
    <body>

    <h1>Teams</h1>                                
    <div style="display:flex;">
        <a href="/"><input type="button" value="Back"></a>
        <a href="{{ route('team.createTeam') }}"><input type="button" value="Add Team"></a>
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
            <th>NAME</th>
            <th>SHORT NAME</th>
            <th>DESCRIPTION</th>
            <th>PICTURE</th>
            <th>COUNTRY</th>
            <th>DIVISION</th> 
            <th>ACCIONES</th>                
        </tr>
        </thead>  
        @foreach ($teams as $team)          
        <tr>        
            <td>{{ $team->name }}</td>
            <td>{{ $team->short_name }}</td>   
            <td>{{ $team->description }}</td>                
            <td><img src = "{{ $team->picture }}" width="40" height="40" alt="img"></td>                
            <td>{{ $team->country }}</td>                
            <td>{{ $team->division }}</td>                
            <td>                                        
                <a href="{{ route('team.modifyTeam', $team) }}"><input type="button" value="Update">
                
                <form action="{{ route('team.deleteTeam',  ['id' => $team->id]) }}" method="POST">
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
