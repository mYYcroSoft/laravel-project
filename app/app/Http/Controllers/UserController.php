<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function getAllUsers()
    {
        $users = User::all();

        return view('users.list', compact('users'));
    }

    public function GetUserById($id)
    {
        $user = User::find($id);
        $user_roles = $user->getRoleNames();
        $roles = Role::all();

        return view('users.edit', compact('user', 'user_roles', 'roles'));
    }

    public function UpdateUserData(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $role = Role::findById($request->role);
        $user->syncRoles([$role]);

        $user->save();

        return redirect()->route('users');
    }
}
