<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamsController;

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
/*
Route::get('/', function () {
    return view('welcome');
});

*/
Route::get('/', function() {
    return view('homeBlade');
});
/*
Route::get('/', [TeamsController::class, 'showAllTeams'])
    ->name('team.showAllTeams');
*/
Route::get('/users', function () {
    return view('users');
});

Route::get('/matches', function () {
    return view('matches');
});

Route::get('teams', [TeamsController::class, 'showAllTeams'])
    ->name('team.showAllTeams');

Route::post('addTeam', [TeamsController::class, 'addTeam'])
    ->name('team.addTeam');
    
Route::get('teams/createteam' , [TeamsController::class, 'createTeam'])
    ->name('team.createTeam');    
    
Route::delete('deleteTeam/{id}', [TeamsController::class, 'deleteTeam'])
    ->name('team.deleteTeam');
    
    
Route::get('teams/modifyteam/{id}' , [TeamsController::class, 'modifyTeam'])
    ->name('team.modifyTeam');   

Route::patch('updateTeam/{team}', [TeamsController::class, 'updateTeam'])
    ->name('team.updateTeam');