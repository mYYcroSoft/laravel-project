<?php

namespace App\Http\Controllers;

use App\Models\User;

class GetUsersFromDatabase extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user_list', compact('users'));
    }
}

class editUser extends Controller
{
    public function index()
    {
        
        $user = User::find($id);

        return view('users.edit', compact('user'));
    }
}