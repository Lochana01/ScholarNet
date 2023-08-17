<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Module;
use Illuminate\Http\Request;

class DataCountController extends Controller
{
    //

    public function displayData()
    {
        $course = Course::count();
        $availableCourses = Course::where('course_status', true)->count();
        $unavailableCourses = Course::where('course_status', false)->count();

        $module = Module::count();
        $availableModules = Module::where('module_status', true)->count();
        $unavailableModules = Module::where('module_status', false)->count();

        $users = User::all();
        //$totalUsers = User::count();
        $totalUsers = User::where('is_admin', false)->count();
        $activeAccounts = User::where('account_status', true)->where('is_admin', false)->count();
        $deactivatedAccounts = User::where('account_status', false)->count();

        $teacherUserCount = User::where('user_type', 'teacher')->where('account_status', true)->count();
        $studentUserCount = User::where('user_type', 'student')->where('account_status', true)->count();

        return view('admin_dashboard', compact('course', 'availableCourses', 'unavailableCourses', 'module', 'availableModules', 'unavailableModules', 'users', 'totalUsers', 'activeAccounts', 'deactivatedAccounts', 'teacherUserCount', 'studentUserCount'));
    }
}
