<!DOCTYPE html>
    <body>
        

        <h1> Modificar Estadistica</h1>
        <form method="POST" action="{{ route('teamstats.updateTeamstats', $teamstats) }}">
            @csrf
            @method('PATCH')
            <label>
                Wins: <br>   
                <input value="{{ old('wins') }}" type="text" name="wins">
                {!! $errors->first('wins', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Losses: <br>
                <input value="{{ old('losses') }}" type="text" name="losses">
                {!! $errors->first('losses', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Ranking position: <br>
                <input value="{{ old('ranking_position') }}" type="text" name="ranking_position">
                {!! $errors->first('ranking_position', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Win rate: <br>
                <input value="{{ old('win_rate') }}" type="text" name="win_rate">
                {!! $errors->first('win_rate', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Lose rate: <br>
                <input value="{{ old('lose_rate') }}" type="text" name="lose_rate">
                {!! $errors->first('lose_rate', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            <label>
                Equipo:<br>
                <input value="{{ old('team_id') }}" type="text" name="team_id">
                {!! $errors->first('team_id', '<br><small class="text-danger">:message</small><br>') !!}
            </label>
            <p></p> 
            
            <p></p> 
            <button class="btn btn-primary">Modificar Estadística</button>
        </form>                    
        <br>
                 
    </body>
</html>
