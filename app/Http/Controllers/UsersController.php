<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Userstat;
use App\Models\Team;


class UsersController extends Controller
{

    public function showAllUsers(Request $request) {
        $orderBy = $request->input('orderBy', 'id');//por defecto ordena por id si no se introce parametro
        $users = User::orderBy($orderBy)->paginate(5); 
        return view('users.usersBlade', compact('users','orderBy'));
    }

    public function createUser(){
        return view('users.usersCreateBlade');
    }

    public function addUser(Request $req){

        $req->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'nickname' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => [
                'required',
                'min:8',
            ],
            'country' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'rol' => 'required|integer|between:0,3',
            'team_id' => 'required|string|max:255',
        ]);

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
        $userstat = Userstat::select()->where('user_id', $id);
        $userstat->delete();
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

    public function updateUser($id){
        request()->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'nickname' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => [
                'required',
                'min:8',
            ],
            'country' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'rol' => 'required|integer|between:0,3',
            'team_id' => 'required|string|max:255',
        ]);
        
        $user = User::find($id);
        $team = Team::select()->where('name', request('team_id'))->first();

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

    public function showUserData($id){
        $user = User::findOrFail($id);
        $userstat = Userstat::where('user_id', $id)->first();
        return view('users.usersProfileBlade', [
            'user' => $user,
            'userstat' => $userstat
        ]);
    }
}
