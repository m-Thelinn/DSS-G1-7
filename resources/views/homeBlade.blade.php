<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <h1>Seleccione una opcion para ver los datos</h1>
        
        <a href="/users"><input type="button" value="Users"></a>
        <a href="{{ route('team.showAllTeams') }}"><input type="button" value="Teams"></a>
        <a href="{{ route('game.showAllGames') }}"><input type="button" value="Games"></a>        
        <a href="{{ route('teamstats.showAllteamstats') }}"><input type="button" value="Teams stats"></a> 
        <a href="{{ route('userstats.showAlluserstats') }}"><input type="button" value="Users stats"></a>  
        
    </body>
</html>