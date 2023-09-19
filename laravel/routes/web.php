<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\DataCountController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\DiscussionController;
use App\Http\Middleware\Role;


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
// Route::middleware(['web', 'auth', 'role:admin'])->group(function () {
//     Route::get('/admin_dashboard', function () {
//         return view('admin_dashboard');
//     })->name('admin_dashboard');
// });




// Route::get('/admin_dashboard', function () {
//     return view('admin_dashboard');
// })->name('admin_dashboard')->middleware(['auth', 'role:admin']);

// Route::get('/main_lms', function () {
//     return view('main_lms');
// })->name('main_lms')->middleware(['auth', 'role:teacher,student']);

// For the 'main_lms' route, allow access to teachers and students
Route::get('/main_lms', function () {
    return view('main_lms');
})->name('main_lms')->middleware(['auth', 'role:teacher,student']);

// For the 'admin_dashboard' route, allow access only to admins
Route::get('/admin_dashboard', function () {
    return view('admin_dashboard');
})->name('admin_dashboard')->middleware(['auth', 'role:admin']);




// Route::get('/admin_dashboard', function () {
//     return view('admin_dashboard');
// })->name('admin_dashboard')->middleware(['auth', Role::class . ':admin']);;

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

Route::get('/module_lms', function () {
    return view('module_lms');
});

Route::get('/file_upload_lms', function () {
    return view('file_upload_lms');
});

Route::get('/lms_feedback', function () {
    return view('lms_feedback');
});

Route::get('/lms_discussion', function () {
    return view('lms_discussion');
});

Route::get('/lms_discussion_view', function () {
    return view('lms_discussion_view');
});

Route::get('/lms_event', function () {
    return view('lms_event');
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

//Course user form
Route::get('/adminRegister', [CourseController::class, 'showUserForm']);

//Course user edit form
// Route::get('/admin_edit_user', [CourseController::class, 'showUserEditForm']);
Route::get('/admin_edit_user', [AdminUserController::class, 'edit']);


//Module overview
Route::get('/admin_module_overview', [ModuleController::class, 'show']);

Route::get('/file_upload_lms', [ModuleController::class, 'showFileUploadView']);


Route::get('/lms_discussion_view', [DiscussionController::class, 'index']);

Route::post('/discussion/{discussion}/comment', [DiscussionController::class, 'addComment'])->name('discussion.comment');



//Route::get('/main_lms', [ModuleController::class, 'displayModule']);

//File retrieval
Route::get('/module_lms', [FileController::class, 'index']);

//Storing data in DB
Route::post('/admin_create_course', [CourseController::class, 'store']);
Route::post('/admin_create_module', [ModuleController::class, 'store']);

Route::post('/file_upload_lms', [FileController::class, 'store']);

Route::post('/lms_feedback', [FeedbackController::class, 'store']);

Route::post('/lms_discussion', [DiscussionController::class, 'store']);


//** Editing data **//
Route::get('/admin_edit_course/{course}', [CourseController::class, 'edit'])->name('admin_edit_course');
Route::put('/admin_manage_courses/{course}', [CourseController::class, 'update'])->name('admin_manage_courses');

Route::get('/admin_edit_module/{module}', [ModuleController::class, 'edit'])->name('admin_edit_module');
Route::put('/admin_manage_modules/{module}', [ModuleController::class, 'update'])->name('admin_manage_modules');

Route::get('/admin_edit_user/{user}', [AdminUserController::class, 'edit'])->name('admin_edit_user');
Route::put('/admin_delete_user/{user}', [AdminUserController::class, 'update'])->name('admin_delete_user');


//** Retrieving data from DB **//
//Display user data
Route::get('/admin_dashboard', [DataCountController::class, 'displayData']);


Route::get('/lms_module/{moduleTitle}', [ModuleController::class, 'showModuleInfo'])->name('module.show');




Auth::routes();

Route::middleware(['auth', 'admin'])->name('admin_')->prefix('admin')->group(function() {
    Route::get('/admin_dashboard',[App\Http\Controllers\Admin\AdminController::class,'index'])->name('dashboard');
});

// Route::get('/admin_dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin_dashboard')->middleware(['auth', 'admin']);

// Route::middleware(['auth', 'admin'])->name('admin_')->prefix('admin')->group(function() {

// });


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
