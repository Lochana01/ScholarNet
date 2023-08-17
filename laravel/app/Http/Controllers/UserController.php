<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    // public function displayTotal()
    // {
    //     $totalUsers = User::count();

    //     return view('admin_dashboard', compact('totalUsers'));
    // }

    // public function displayByTypeTeacher()
    // {
    //     //$userType = 'teacher'; 
    //     $teacherUserCount = User::where('user_type', 'teacher')->count();

    //     return view('admin_dashboard', compact('teacherUserCount'));
    // }

    // public function displayByTypeStudent()
    // {
    //     $studentUserCount = User::where('user_type', 'student')->count();

    //     return view('admin_dashboard', compact('studentUserCount'));
    // }

    // public function displayData()
    // {
    //     $users = User::all();

    //     $course = Course::where('course_status', true)->count();
    //     $totalUsers = User::where('is_admin', false)->count();
    //     $activeAccounts = User::where('account_status', true)->where('is_admin', false)->count();
    //     $deactivatedAccounts = User::where('account_status', false)->count();

    //     $teacherUserCount = User::where('user_type', 'teacher')->where('account_status', true)->count();
    //     $studentUserCount = User::where('user_type', 'student')->where('account_status', true)->count();

    //     return view('admin_dashboard', compact('course', 'users', 'totalUsers', 'activeAccounts', 'deactivatedAccounts', 'teacherUserCount', 'studentUserCount'));
    // }

    public function displayUserAccount()
    {
        $users = User::all();
        $status = session('status');

        return view('admin_delete_user_account', compact('users', 'status'));
    }

    public function deactivateAccount($id)
    {
        $users = User::find($id);

        if ($users) {
            $users->update(['account_status' => false]);
            //return view('admin_delete_user_account')->with('success', 'User account deactivated successfully.');
        }

        return redirect()->route('admin_delete_user_account')->with('status', 'success');

        //$users = User::all();

        //return view('admin_delete_user_account')->with('success', 'User account not found.');
    }

    public function displayAccountOverview()
    {
        $users = User::all();

        return view('admin_account_overview', compact('users'));
    }
}
