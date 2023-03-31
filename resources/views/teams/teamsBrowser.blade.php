<!DOCTYPE html>
@extends('layouts.app')
    <body>

    <h1>Teams browse</h1>  
        
    <table>
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
