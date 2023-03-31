<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamsController extends Controller
{
    //      
    public function showAllTeams(Request $request){        
        $orderBy = $request->input('orderBy', 'id');//por defecto ordena por id si no se introce parametro
        $teams = Team::orderBy($orderBy)->paginate(3);
        return view('teams.teamsBlade', compact('teams', 'orderBy'));
    }

    public function searchTeamName(Request $request) {                 
        $nombre = $request->input('nombre');        
        
        $teams = Team::where('name', $nombre)->get(); 
        //dd($teams);  
        return view('teams.teamsBrowser',compact('teams'));                            
    }

    public function searchTeamid(Request $request) {                 
        $id = $request->input('id');        
        //dd($id);
        $teams = Team::where('id', $id)->get(); 
        //dd($teams);  
        return view('teams.teamsBrowser',compact('teams'));                            
    }
    

    public function createTeam(){
        return view('teams.teamsCreateBlade');
    }

    public function addTeam(Request $req){        
        $team = new Team();
        $team->name = $req->input('name');
        $team->short_name = $req->input('short_name');
        $team->description = $req->input('description');
        $team->picture = $req->input('picture');
        $team->country = $req->input('country');
        $team->division = $req->input('division');

        $team->save();
        
        return redirect()->route('team.showAllTeams');
    }

    public function deleteTeam($id){
        $team = Team::findOrfail($id);
        $team->delete($id);
        return redirect()->route('team.showAllTeams');
    }


    public function modifyTeam($id){
        $team = Team::findOrfail($id);
        return view('teams.teamsModifyBlade', [
            'team' => $team
        ]);
    }

    public function updateTeam(Team $team){        
        $team->name = request('name');
        $team->short_name = request('short_name');
        $team->description =request('description');
        $team->picture = request('picture');
        $team->country = request('country');
        $team->division = request('division');        

        $team->save();
        return redirect()->route('team.showAllTeams');
    
    }
}
