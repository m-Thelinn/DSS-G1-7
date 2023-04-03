<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\User;
use App\Models\Game;
use App\Models\Teamstat;
use App\Models\Userstat;

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
        
        $req->validate([
            'name' => 'required|string|max:255',
            'short_name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'picture' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'division' => 'required|digits:1',
        ]);

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
        $users = User::where('team_id', $id)->get();
        foreach ($users as $user) {
            $userstat = Userstat::where('user_id', $user->id);
            $userstat->delete();
            $user->delete();
        }
        
        $games = Game::where('local_id', $id)->orWhere('visitante_id', $id)->get();
        foreach ($games as $game) {
            $game->delete();
        }

        $teamstat = Teamstat::where('team_id', $id);
        $teamstat->delete();
        
        $team = Team::findOrFail($id);
        $team->delete();
        
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

        request()->validate([
            'name' => 'required|string|max:255',
            'short_name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'picture' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'division' => 'required|digits:1',
        ]);

        $team->save();
        return redirect()->route('team.showAllTeams');
    
    }
}
