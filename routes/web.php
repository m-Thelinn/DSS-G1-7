<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TeamstatsController;
use App\Http\Controllers\UserstatsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function() {
    return view('homeBlade');
});

//------------------USUARIOS------------------
Route::get('users', [UsersController::class, 'showAllUsers'])
    ->name('user.showAllUsers');

Route::post('/users/searchByName', [UsersController::class, 'searchUser'])
    ->name('user.searchByName');

Route::get('users/createuser' , [UsersController::class, 'createUser'])
    ->name('user.createUser');

Route::post('addUser', [UsersController::class, 'addUser'])
    ->name('user.addUser');

Route::delete('deleteuser/{id}', [UsersController::class, 'deleteUser'])
    ->name('user.deleteUser');

Route::get('users/modifyuser/{id}' , [UsersController::class, 'modifyUser'])
    ->name('user.modifyUser');   

Route::patch('updateUser/{user}', [UsersController::class, 'updateUser'])
    ->name('user.updateUser');


//------------------EQUIPOS------------------
Route::get('teams', [TeamsController::class, 'showAllTeams'])
    ->name('team.showAllTeams');

Route::post('/teams/searchByName', [TeamsController::class, 'searchTeam'])
    ->name('team.searchByName');

Route::get('teams/createteam' , [TeamsController::class, 'createTeam'])
    ->name('team.createTeam'); 

    Route::post('addTeam', [TeamsController::class, 'addTeam'])
    ->name('team.addTeam');
       
Route::delete('deleteTeam/{id}', [TeamsController::class, 'deleteTeam'])
    ->name('team.deleteTeam');
    
    
Route::get('teams/modifyteam/{id}' , [TeamsController::class, 'modifyTeam'])
    ->name('team.modifyTeam');   

Route::patch('updateTeam/{team}', [TeamsController::class, 'updateTeam'])
    ->name('team.updateTeam');


//------------------GAMES------------------
Route::get('games', [GamesController::class, 'showAllGames'])
    ->name('game.showAllGames');

Route::get('games/creategame' , [GamesController::class, 'createGame'])
    ->name('game.createGame');

Route::post('addGame', [GamesController::class, 'addGame'])
    ->name('game.addGame');

Route::delete('deletegame/{id}', [GamesController::class, 'deleteGame'])
    ->name('game.deleteGame');

Route::get('games/modifygame/{id}' , [GamesController::class, 'modifyGame'])
    ->name('game.modifyGame');   

Route::patch('updateGame/{game}', [GamesController::class, 'updateGame'])
    ->name('game.updateGame');

//------------------TEAMSTATS------------------

/*posible para buscador
Route::get('games/{game}', [GamesController::class,'showGame'])
    ->name('game.showGame');
*/

Route::get('teamstats', [TeamstatsController::class, 'showAllteamstats'])
    ->name('teamstats.showAllteamstats');

Route::get('teamstats/createteamstats' , [TeamstatsController::class, 'createTeamstats'])
    ->name('teamstats.createTeamstats'); 

Route::post('addTeamstats', [TeamstatsController::class, 'addTeamstats'])
    ->name('teamstats.addTeamstats');
    
Route::delete('deleteteamstats/{id}', [TeamstatsController::class, 'deleteTeamstats'])
    ->name('teamstats.deleteTeamstats');

Route::get('teamstats/modifyteamstats/{id}' , [TeamstatsController::class, 'modifyTeamstats'])
    ->name('teamstats.modifyTeamstats');   

Route::patch('updateTeamstats/{teamstats}', [TeamstatsController::class, 'updateTeamstats'])
    ->name('teamstats.updateTeamstats');

//------------------USERSTATS------------------

Route::get('userstats', [UserstatsController::class, 'showAlluserstats'])
    ->name('userstats.showAlluserstats');

Route::get('userstats/createuserstats' , [UserstatsController::class, 'createUserstats'])
    ->name('userstats.createUserstats'); 

Route::post('addUserstats', [UserstatsController::class, 'addUserstats'])
    ->name('userstats.addUserstats');
    
Route::delete('deleteuserstats/{id}', [UserstatsController::class, 'deleteUserstats'])
    ->name('userstats.deleteUserstats');

Route::get('userstats/modifyuserstats/{id}' , [UserstatsController::class, 'modifyUserstats'])
    ->name('userstats.modifyUserstats');   

Route::patch('updateUserstats/{userstats}', [UserstatsController::class, 'updateUserstats'])
    ->name('userstats.updateUserstats');
