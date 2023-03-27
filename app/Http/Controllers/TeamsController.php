<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamsController extends Controller
{
    //    
    public function showAllTeams() {
        $teams = Team::all();
        return view('teams.teamsBlade', compact('teams'));
    }

    public function createTeam(){
        return view('teams.teamsCreateBlade');
    }

    public function addTeam(Request $req){
        $name = $req->input('name');
        $short_name = $req->input('short_name');
        $description = $req->input('description');
        $picture = $req->input('picture');
        $country = $req->input('country');
        $division = $req->input('division');         
        
        $req->validate([
            'name' => 'required|string|max:255',
            'short_name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'picture' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'division' => 'required|digits:1',
        ]);

        Team::create([
            'name' => $name,
            'short_name' => $short_name,
            'description' => $description,
            'picture' => $picture,
            'country' => $country ,
            'division' => $division
        ]);
        
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

        return redirect()->route('team.showAllTeams');
    
    }
}
