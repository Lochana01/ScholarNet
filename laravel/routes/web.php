<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\DataCountController;


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

Route::get('/main_lms', function () {
    return view('main_lms');
})->name('main_lms');


Route::get('/admin_dashboard', function () {
    return view('admin_dashboard');
});

Route::get('/adminRegister', function () {
    return view('adminRegister');
});

Route::get('/admin_delete_user_account', function () {
    return view('admin_delete_user_account');
});

Route::get('/admin_create_course', function () {
    return view('admin_create_course');
});

Route::get('/admin_manage_course', function () {
    return view('admin_manage_course');
});

Route::get('/admin_course_overview', function () {
    return view('admin_course_overview');
});

Route::get('/admin_create_module', function () {
    return view('admin_create_module');
});

Route::get('/admin_manage_module', function () {
    return view('admin_manage_module');
});

Route::get('/admin_module_overview', function () {
    return view('admin_module_overview');
});

// Route::get('/admin_delete_user_account', function () {
//     return view('admin_delete_user_account');
// });


//***  Admin dashboard functionality ***//
//Registering new users
Route::post('/adminRegister', [AdminUserController::class, 'createUser'])->name('adminRegister');

//Deactivating user account
Route::get('/admin_delete_user_account', [UserController::class, 'displayUserAccount'])->name('admin_delete_user_account');
//Route::get('/admin_delete_user_account', [UserController::class, 'deactivateAccount']);
Route::get('/deactivate_account/{id}', [UserController::class, 'deactivateAccount'])->name('deactivate_account');

//Deactivating course status
Route::get('/admin_manage_course', [CourseController::class, 'displayCourse'])->name('admin_manage_course');
Route::get('/deactivate_course/{id}', [CourseController::class, 'deactivateCourse'])->name('deactivate_course');

//Deactivating module status
Route::get('/admin_manage_module', [ModuleController::class, 'displayModule'])->name('admin_manage_module');
Route::get('/deactivate_module/{id}', [ModuleController::class, 'deactivateModule'])->name('deactivate_module');

//User account overview
Route::get('/admin_account_overview', [UserController::class, 'displayAccountOverview']);

//Course overview
Route::get('/admin_course_overview', [CourseController::class, 'show']);


//Module overview
Route::get('/admin_module_overview', [ModuleController::class, 'show']);

//Storing data in DB
Route::post('/admin_create_course', [CourseController::class, 'store']);
Route::post('/admin_create_module', [ModuleController::class, 'store']);


//** Editing data **//
Route::get('/admin_edit_course/{course}', [CourseController::class, 'edit'])->name('admin_edit_course');
Route::put('/admin_manage_courses/{course}', [CourseController::class, 'update'])->name('admin_manage_courses');

Route::get('/admin_edit_module/{module}', [ModuleController::class, 'edit'])->name('admin_edit_module');
Route::put('/admin_manage_modules/{module}', [ModuleController::class, 'update'])->name('admin_manage_modules');


//** Retrieving data from DB **//
//Display user data
Route::get('/admin_dashboard', [DataCountController::class, 'displayData']);


Auth::routes();

Route::middleware(['auth', 'admin'])->name('admin_')->prefix('admin')->group(function() {
    Route::get('/admin_dashboard',[App\Http\Controllers\Admin\AdminController::class,'index'])->name('dashboard');
});


//AUthentication

Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin_dashboard', [HomeController::class, 'adminHome'])->name('admin.dashboard');
});

Route::middleware(['auth', 'user-access:teacher'])->group(function () {
  
    Route::get('/main_lms', [HomeController::class, 'mainHome'])->name('main.lms');
});

Route::middleware(['auth', 'user-access:student'])->group(function () {
  
    Route::get('/main_lms', [HomeController::class, 'mainHome'])->name('main.lms');
});






// Route::get('/admin_dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin_dashboard')->middleware(['auth', 'admin']);

// Route::middleware(['auth', 'admin'])->name('admin_')->prefix('admin')->group(function() {

// });


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
