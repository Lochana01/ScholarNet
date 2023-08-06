<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class AdminUserController extends Controller
{
    public function showCreateUserForm()
    {
        return view('adminRegister');
    }

    public function createUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'user_type' => 'required|in:teacher,student',
        ]);

        
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->user_type = $request->input('user_type');

        // Save the user
        $user->save();

        return redirect()->route('adminRegister')->with('success', 'User created successfully.');
    }
}






