<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserstatsController extends Controller
{
    //
    
    public function showAllteamstats() {
        //$teamstats = Teamstats::all();
        $teamstats = DB::table('teamstats')->get();
        //dd($teamstats);
        //dd(compact('teamstats'));
        return view('teamstats.teamstatsBlade', compact('teamstats'));
    }

    public function createTeamstats(){
        return view('teamstats.teamstatsCreateBlade');
    }

    public function addTeamstats(Request $req){                 
        //falta completar
        
        return redirect()->route('teamstats.showAllteamstats');
    }

    public function deleteTeamstats($id){
        /*
        $teamstats = Teamstats::findOrfail($id);
        $teamstats->delete($id);
        */
        return redirect()->route('teamstats.showAllTeamstats');
    }


    public function modifyTeamstats($id){
        /*
        $teamstats = Teamstats::findOrfail($id);
        
        return view('teamstats.teamstatsModifyBlade', [
            'teamstats' => $teamstats
        ]);
        */
        return redirect()->route('teamstats.showAllTeamstats');
    }

    public function updateTeamstats(Teamstats $teamstat){
        /*
        request()->validate([
            'name' => 'required|string|max:255',
            'short_name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'picture' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'division' => 'required|digits:1',
        ]);

        $team->update([
            'name' => request('name'),
            'short_name' => request('short_name'),
            'description' => request('description'),
            'picture'=> request('picture'),
            'country' => request('country'),
            'division' => intval(request('division')),


        ]);
        */
        return redirect()->route('teamstats.showAllTeamstats');
    
    }
    
}
