<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamstatsController extends Controller
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
        
        return redirect()->route('game.showAllGames');
    }
}
