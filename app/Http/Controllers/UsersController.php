<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team;


class UsersController extends Controller
{

    public function showAllUsers() {
        $users = User::all();
        return view('users.usersBlade', compact('users'));
    }

    public function createUser(){
        return view('users.usersCreateBlade');
    }

    public function addUser(Request $req){                 
        $team = Team::select()->where('name', $req->input('team_id'))->first();

        $user = new User();
        $user->name = $req->input('name');
        $user->lastname = $req->input('lastname');
        $user->nickname = $req->input('nickname');
        $user->email = $req->input('email');
        $user->password = $req->input('password');
        $user->country = $req->input('country');
        $user->phone = $req->input('phone');
        $user->rol = $req->input('rol');
        $user->team_id = $team->id;       

        $user->save();
        
        return redirect()->route('user.showAllUsers');
    }

    public function deleteUser($id){
        $user = User::findOrfail($id);
        $user->delete($id);
        return redirect()->route('user.showAllUsers');
    }

    public function modifyUser($id){
        $user = User::findOrfail($id);
        return view('users.usersModifyBlade', [
            'user' => $user
        ]);
    }

    public function updateUser(User $user){
        
        $user->name = request('name');
        $user->lastname = request('lastname');
        $user->nickname = request('nickname');
        $user->email = request('email');
        $user->password = request('password');
        $user->phone = request('phone');
        $user->rol = request('rol');
        $user->country = request('country');
        $team = Team::select()->where('name', request('team_id'))->first();
        $user->team_id = $team->id;

        $user->save();

        return redirect()->route('user.showAllUsers');
    }
}