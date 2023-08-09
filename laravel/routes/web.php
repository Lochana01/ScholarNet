<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AdminUserController;


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


Route::get('/events', function () {
    return view('events');
});

Route::get('/pricing', function () {
    return view('pricing');
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

Route::get('/adminRegister', function () {
    return view('adminRegister');
});

// Route::get('/adminRegister', [AdminUserController::class, 'showCreateUserForm'])->name('adminRegister');
Route::post('/adminRegister', [AdminUserController::class, 'createUser'])->name('adminRegister');
// Route::get('/adminRegister', [RegisterController::class, 'showCreateUserForm'])->name('admin.create_user_form');
// Route::post('/adminRegister', [RegisterController::class, 'createUser'])->name('admin.create_user');
// Route::get('/adminRegister', 'AdminUserController@showCreateUserForm')->name('admin.create_user_form');
// Route::post('/adminRegister', 'AdminUserController@createUser')->name('admin.create_user');



Auth::routes();

Route::middleware(['auth', 'admin'])->name('admin_')->prefix('admin')->group(function() {
    Route::get('/admin_dashboard',[App\Http\Controllers\Admin\AdminController::class,'index'])->name('dashboard');
});

// Route::get('/admin_dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin_dashboard')->middleware(['auth', 'admin']);

// Route::middleware(['auth', 'admin'])->name('admin_')->prefix('admin')->group(function() {

// });


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
