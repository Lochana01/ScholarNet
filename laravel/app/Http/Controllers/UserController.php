<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

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
