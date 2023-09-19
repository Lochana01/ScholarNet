<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::ADMIN;

    protected function redirectTo()
    {
        // if (Auth::user()->is_admin) {
        //     return route('admin_dashboard');
        // } else {
        //     return route('index');
        // }

        // $userType = Auth::user()->user_type;

        // if ($userType !== null) {
        //     return route('main_lms');
        // } else {
        //     if (Auth::user()->is_admin) {
        //         return route('admin_dashboard');
        //     } else {
        //         return route('index');
        //     }
        // }

        if (Auth::user()->is_admin) {
            return route('admin_dashboard');
        } else {
            if (Auth::user()->account_status){
                return route('main_lms');
            } else {
                return new Response('Forbidden', 403);
            }
            //return route('main_lms');
            // Check if the user is a student
            // if (Auth::user()->user_type === 'student') {
            //     return route('main_lms');
            // } else {
            //     return route('main_lms');
            // }
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
