<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CoursesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

// Authentication: Login and Register
Auth::routes();

// Admin Account Management
Route::resource('/user', UsersController::class);

// Courses management
Route::get('/course/create/add/{id}', [CoursesController::class, 'create_add_user']);
Route::get('/course/create/remove/{id}', [CoursesController::class, 'create_remove_user']);
Route::get('/course/{course_id}/edit/add/{id}', [CoursesController::class, 'edit_add_user']);
Route::get('/course/{course_id}/edit/remove/{id}', [CoursesController::class, 'edit_remove_user']);
Route::resource('/course', CoursesController::class);


// Home Page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [PagesController::class,'index']);
// Route::get('/home', [PagesController::class,'index']);
Route::get('/welcome', [PagesController::class,'welcome']);
// Route::get('/login', [PagesController::class,'login']);
Route::get('/signup', [PagesController::class,'signup']);
// Route::get('/account-manager', [PagesController::class,'account_manager']);
// Route::get('/course-manager', [PagesController::class,'course_manager']);
Route::get('/test-manager', [PagesController::class,'test_manager']);
Route::get('/edit-test', [PagesController::class,'edit_test']);
Route::get('/take-test', [PagesController::class,'take_test']);
Route::get('/test-results', [PagesController::class,'test_results']);
Route::get('/course-edit', [PagesController::class,'edit_course']);
Route::get('/account-page', [PagesController::class,'account_page']);
Route::get('/modal-template', [PagesController::class,'modal_template']);
Route::get('/forgot-password', [PagesController::class,'forgot_password']);
