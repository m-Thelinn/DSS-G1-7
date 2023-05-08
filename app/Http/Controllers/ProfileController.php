<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    //
    public function showProfile(Request $request){   
        $user = Auth::user();
        return view('profile.profile',compact('user'));
        //dd($user);
    }
}
