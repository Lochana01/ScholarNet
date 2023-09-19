<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        switch (auth()->user()->user_type) {
            case 'admin':
                return redirect()->route('admin_dashboard');
                break;
            case 'teacher':
            case 'student':
                return redirect()->route('main_lms');
                break;
            default:
                return redirect()->route('login');
                break;
        }
    }
    
}
