<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TeamstatsController;
use App\Http\Controllers\UserstatsController;
use App\Http\Controllers\AutenticationController;
use App\Http\Controllers\ProfileController;



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

//VISTAS USUARIO SIN REGISTRAR NI INICIADO
Route::get('/', function() {
    return view('homeBlade');
})->name('home');

Route::get('/contact', function() {
    return view('contact');
})->name('contact');

Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('/faq', function() {
    return view('faq');
})->name('faq');

/*Route::get('/password/reset', function() {
    return view('auth/passwords/reset.blade.php');
})->name('changePassword');


Route::post('auth/login', 'Auth\LoginController@login')->name('login');*/

//------------------USUARIOS------------------
Route::get('users', [UsersController::class, 'showAllUsers'])
    ->name('user.showAllUsers');

Route::get('users/createuser' , [UsersController::class, 'createUser'])->middleware('isAdmin')
    ->name('user.createUser');

Route::post('addUser', [UsersController::class, 'addUser'])->middleware('isAdmin')
    ->name('user.addUser');

Route::delete('deleteuser/{id}', [UsersController::class, 'deleteUser'])->middleware('isAdmin')
    ->name('user.deleteUser');

Route::get('users/modifyuser/{id}' , [UsersController::class, 'modifyUser'])->middleware('isAdmin')
    ->name('user.modifyUser');   

Route::patch('updateUser/{user}', [UsersController::class, 'updateUser'])->middleware('isAdmin')
    ->name('user.updateUser');


//------------------EQUIPOS------------------

Route::post('/teams/searchByName', [TeamsController::class, 'searchTeamName'])
    ->name('team.searchByName');

Route::post('/teams/searchByid', [TeamsController::class, 'searchTeamid'])
    ->name('team.searchByid');

Route::get('teams/createteam' , [TeamsController::class, 'createTeam'])->middleware('isAdmin')
    ->name('team.createTeam'); 

Route::post('addTeam', [TeamsController::class, 'addTeam'])->middleware('isAdmin')
    ->name('team.addTeam');

Route::get('teams/{orderBy?}', [TeamsController::class, 'showAllTeams'])
    ->name('team.showAllTeams');
       
Route::delete('deleteTeam/{id}', [TeamsController::class, 'deleteTeam'])->middleware('isAdmin')
    ->name('team.deleteTeam');
    
Route::get('teams/modifyteam/{id}' , [TeamsController::class, 'modifyTeam'])->middleware('isAdmin')
    ->name('team.modifyTeam');   

Route::patch('updateTeam/{team}', [TeamsController::class, 'updateTeam'])->middleware('isAdmin')
    ->name('team.updateTeam');


//------------------GAMES------------------
Route::get('games/{orderBy?}', [GamesController::class, 'showAllGames'])
    ->name('game.showAllGames');

Route::get('games/creategame' , [GamesController::class, 'createGame'])->middleware('isAdmin')
    ->name('game.createGame');

Route::post('addGame', [GamesController::class, 'addGame'])->middleware('isAdmin')
    ->name('game.addGame');

Route::delete('deletegame/{id}', [GamesController::class, 'deleteGame'])->middleware('isAdmin')
    ->name('game.deleteGame');

Route::get('games/modifygame/{id}' , [GamesController::class, 'modifyGame'])->middleware('isAdmin')
    ->name('game.modifyGame');   

Route::patch('updateGame/{game}', [GamesController::class, 'updateGame'])->middleware('isAdmin')
    ->name('game.updateGame');

//------------------TEAMSTATS------------------
Route::get('teamstats/{orderBy?}', [TeamstatsController::class, 'showAllteamstats'])->middleware('isAdmin')
    ->name('teamstats.showAllteamstats');

Route::get('teamstats/createteamstats' , [TeamstatsController::class, 'createTeamstats'])->middleware('isAdmin')
    ->name('teamstats.createTeamstats'); 

Route::post('addTeamstats', [TeamstatsController::class, 'addTeamstats'])->middleware('isAdmin')
    ->name('teamstats.addTeamstats');
    
Route::delete('deleteteamstats/{id}', [TeamstatsController::class, 'deleteTeamstats'])->middleware('isAdmin')
    ->name('teamstats.deleteTeamstats');

Route::get('teamstats/modifyteamstats/{id}' , [TeamstatsController::class, 'modifyTeamstats'])->middleware('isAdmin')
    ->name('teamstats.modifyTeamstats');   

Route::patch('updateTeamstats/{teamstats}', [TeamstatsController::class, 'updateTeamstats'])->middleware('isAdmin')
    ->name('teamstats.updateTeamstats');

//------------------USERSTATS------------------
Route::get('userstats/{orderBy?}', [UserstatsController::class, 'showAlluserstats'])->middleware('isAdmin')
    ->name('userstats.showAlluserstats');

Route::get('userstats/createuserstats' , [UserstatsController::class, 'createUserstats'])->middleware('isAdmin')
    ->name('userstats.createUserstats'); 

Route::post('addUserstats', [UserstatsController::class, 'addUserstats'])->middleware('isAdmin')
    ->name('userstats.addUserstats');
    
Route::delete('deleteuserstats/{id}', [UserstatsController::class, 'deleteUserstats'])->middleware('isAdmin')
    ->name('userstats.deleteUserstats');

Route::get('userstats/modifyuserstats/{id}' , [UserstatsController::class, 'modifyUserstats'])->middleware('isAdmin')
    ->name('userstats.modifyUserstats');   

Route::patch('updateUserstats/{userstats}', [UserstatsController::class, 'updateUserstats'])->middleware('isAdmin')
    ->name('userstats.updateUserstats');

Auth::routes();

//Route::get('/iniciado', [App\Http\Controllers\HomeController::class, 'index'])->name('iniciado');

//PERFIL
Route::get('profile' , [ProfileController::class, 'showProfile'])
    ->name('profile.showProfile');   

Route::get('profile/modifyprofile' , [ProfileController::class, 'modifyProfile'])
    ->name('profile.modifyProfile');   

Route::patch('updateProfile', [ProfileController::class, 'updateProfile'])
    ->name('profile.updateProfile');

//VISTA ADMIN
Route::group(['middleware' => ['isAdmin']], function() {
    Route::get('/admin', function() {
        return view('homeAdmin');
    })->name('homeAdmin');
});

//VER PERFILES
Route::get('teamData/{id}',[TeamsController::class, 'showTeamData'])->name('team.teamData');
Route::get('userData/{id}',[UsersController::class, 'showUserData'])->name('user.userData');