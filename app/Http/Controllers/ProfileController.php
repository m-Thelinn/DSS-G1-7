<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userstat;
use Illuminate\Support\Facades\Auth;
use App\Models\Team;


class ProfileController extends Controller
{
    //
    public function showProfile(Request $request){   
        $user = Auth::user();
        $userstat = Userstat::where('user_id', $user->id)->first();
        return view('profile.profile', [
            'user' => $user,
            'userstat' => $userstat
        ], compact('user'));
    }

    public function modifyProfile(){   
        $user = Auth::user();
        return view('profile.updateProfile',compact('user'));
    }

    public function updateProfile(){ 
        
        request()->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'nickname' => 'required|string|max:255',
            'email' => 'required|email',
            'country' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'rol' => 'required|integer|between:0,3',
            'team_id' => 'required|string|max:255',
        ]);
        
        $user = Auth::user();
        $team = Team::select()->where('name', request('team_id'))->first();
        $user->name = request('name');
        $user->lastname = request('lastname');
        $user->nickname = request('nickname');
        $user->email = request('email');
        $user->phone = request('phone');
        $user->rol = request('rol');
        $user->country = request('country');
        $user->team_id = $team->id;
        $user->save();
        return redirect('/profile');
    }
}
