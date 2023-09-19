<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
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
            'batch_code' => 'required|string|max:255',
            'telephone_no' => 'required|digits_between:10,10',
            'dob' => 'required|date|before_or_equal:today',
            'user_type' => 'required|in:teacher,student',
            'course_id' => 'required|exists:courses,id',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'address' => $validatedData['address'],
            'telephone_no' => $validatedData['telephone_no'],
            'dob' => $validatedData['dob'],
            'user_type' => $validatedData['user_type'],
            'course_id' => $validatedData['course_id'],
        ]);

        $user->courses()->attach($validatedData['course_id']);
        
        $user->save();

        return redirect()->route('adminRegister')->with('success', 'User created successfully.');
    }

    public function edit(User $user)
    {
        $courses = Course::all();
        return view('admin_edit_user', compact('user', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'dob' => $request->dob,
            'address' => $request->address,
            'telephone_no' => $request->telephone_no,
            'email' => $request->email,
            'course_id' => $request->course_id,
            'batch_code' => $request->batch_code,
            'password' => $request->password,
        ]);

        //return redirect()->route('admin_delete_user')->with('status', 'edit_success');
        return redirect()->route('admin_delete_user_account')->with('status', 'edit_success');
    }
}






