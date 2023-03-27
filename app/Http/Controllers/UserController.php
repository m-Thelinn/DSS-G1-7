<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showAllUsers() {
        $users = User::all();

        return view('users.allUsers', compact('users'));
    }
}
