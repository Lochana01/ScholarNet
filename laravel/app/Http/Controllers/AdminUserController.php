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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8',
            'address' => 'required|string|max:255',
            'dob' => 'required|date|before_or_equal:today',
            'user_type' => 'required|in:teacher,student',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'address' => $validatedData['address'],
            'dob' => $validatedData['dob'],
            'user_type' => $validatedData['user_type'],
        ]);

        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        //     'user_type' => 'required|in:teacher,student',
        // ]);

        
        // $user = new User();
        // $user->name = $request->input('name');
        // $user->email = $request->input('email');
        // $user->password = bcrypt($request->input('password'));
        // $user->user_type = $request->input('user_type');

        // Save the user
        $user->save();

        return redirect()->route('adminRegister')->with('success', 'User created successfully.');
    }
}






