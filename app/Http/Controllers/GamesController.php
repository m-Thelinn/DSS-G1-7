<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Team;

class GamesController extends Controller
{
    //
    public function showAllGames() {
        $games = Game::all();
        return view('games.gamesBlade', compact('games'));
    }

    /*posibilidad de buscador, busca por id
    public function showGame(Request $request) {
        $game = Game::find($request->id);
        return view('games.game', compact('game'));
    }
    */

    public function createGame(){
        return view('games.gamesCreateBlade');
    }

    public function addGame(Request $req){                 
        $team1 = Team::select()->where('short_name', $req->input('local_id'))->first();
        $team2 = Team::select()->where('short_name', $req->input('visitante_id'))->first();

        $game = new Game();
        $game->date = $req->input('date');
        $game->time = $req->input('time');
        $game->format = $req->input('format');
        $game->result = $req->input('result');
        $game->local_id = $team1->id;
        $game->visitante_id = $team2->id;        

        $game->save();
        
        return redirect()->route('game.showAllGames');
    }

    public function deleteGame($id){
        $game = Game::findOrfail($id);
        $game->delete($id);
        return redirect()->route('game.showAllGames');
    }

    public function modifyGame($id){
        $game = Game::findOrfail($id);
        return view('games.gamesModifyBlade', [
            'game' => $game
        ]);
    }

    public function updateGame(Game $game){        
        $game->date = request('date');
        $game->time = request('time');
        $game->format = request('format');
        $game->result = request('result');
        $team1 = Team::select()->where('short_name', request('local_id'))->first();
        $team2 = Team::select()->where('short_name', request('visitante_id'))->first();
        $game->local_id = $team1->id;
        $game->visitante_id = $team2->id;        

        $game->save();

        return redirect()->route('game.showAllGames');
    
    }
}
