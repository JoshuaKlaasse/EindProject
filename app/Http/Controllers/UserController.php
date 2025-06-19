<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(string $bla, Request $request, User $users)
    {
        return view('user.profile')->with('users', $users->all());
        
    }
}
