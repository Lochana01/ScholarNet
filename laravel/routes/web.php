<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/trainers', function () {
    return view('trainers');
});


// Route::get('/main_lms', function () {
//     return view('main_lms');
// })->name('main_lms');

Route::get('/lecturerMain_lms', function () {
    return view('lecturerMain_lms');
})->name('lecturerMain_lms');

Route::get('/studentMain_lms', function () {
    return view('studentMain_lms');
})->name('studentMain_lms');



Route::get('/admin_dashboard', function () {
    return view('admin_dashboard');
});

Auth::routes();

Route::middleware(['auth', 'admin'])->name('admin_')->prefix('admin')->group(function() {
    Route::get('/admin_dashboard',[App\Http\Controllers\Admin\AdminController::class,'index'])->name('dashboard');
});

// Route::get('/admin_dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin_dashboard')->middleware(['auth', 'admin']);

// Route::middleware(['auth', 'admin'])->name('admin_')->prefix('admin')->group(function() {

// });


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
