<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Teamstat;
use App\Models\Team;
//usar la clase teamstats

class TeamstatsController extends Controller
{
    //
    public function showAllteamstats(Request $request) {
        $orderBy = $request->input('orderBy', 'id');//por defecto ordena por id si no se introce parametro
        $teamstats = Teamstat::orderBy($orderBy)->paginate(3); 
        return view('teamstats.teamstatsBlade', compact('teamstats', 'orderBy'));
    }

    public function createTeamstats(){
        return view('teamstats.teamstatsCreateBlade');
    }

    public function addTeamstats(Request $req){         
               
        $team1 = Team::select()->where('short_name', $req->input('team_shortName'))->first();

        $teamstat = new Teamstat();
        $teamstat->wins = $req->input('wins');
        $teamstat->losses = $req->input('losses');
        $teamstat->ranking_position = $req->input('ranking_position');
        $teamstat->win_rate = $req->input('win_rate');
        $teamstat->lose_rate = $req->input('lose_rate');
        $teamstat->team_id = $team1->id;
        $teamstat->save();
        
        return redirect()->route('teamstats.showAllteamstats');
    }

    public function deleteTeamstats($id){        
        $teamstats = Teamstat::findOrfail($id);
        $teamstats->delete($id);
        
        return redirect()->route('teamstats.showAllteamstats');
    }


    public function modifyTeamstats($id){
        $teamstats = Teamstat::findOrfail($id);
        return view('teamstats.teamstatsModifyBlade', [
            'teamstats' => $teamstats
        ]);
    }

    public function updateTeamstats($id){   
        $teamstat = Teamstat::find($id);
        $team1 = Team::select()->where('short_name', request('shortName'))->first();     
            
        $teamstat->wins = request('wins');
        $teamstat->losses = request('losses');
        $teamstat->ranking_position = request('ranking_position');
        $teamstat->win_rate = request('win_rate');
        $teamstat->lose_rate = request('lose_rate');
    
        $teamstat->team_id = $team1->id; 
            
        $teamstat->save();
    
        return redirect()->route('teamstats.showAllteamstats');  
    }
}
