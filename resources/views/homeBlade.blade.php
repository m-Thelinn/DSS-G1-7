<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <h1>Seleccione una opcion para ver los datos</h1>
        
        <a href="/users"><input type="button" value="Users"></a>
        <a href="{{ route('team.showAllTeams') }}"><input type="button" value="Teams"></a>
        <a href="/matches"><input type="button" value="Matches"></a>        
        
    </body>
</html>