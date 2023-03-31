<!DOCTYPE html>
    <body>
    

            <h1> Crear nueva estadistica de equipo</h1>
            <form method="POST" action="{{ route('teamstats.addTeamstats') }}">                        
                @csrf
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
                    Equipo (short name):<br>
                    <input value="{{ old('team_shortName') }}" type="text" name="team_shortName">
                    {!! $errors->first('team_shortName', '<br><small class="text-danger">:message</small><br>') !!}
                </label>
                <p></p> 
                
                <p></p> 
                <button class="btn btn-primary">Crear Estadística</button>
            </form>            
    </body>
</html>