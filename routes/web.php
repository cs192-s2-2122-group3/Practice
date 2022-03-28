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

// Admin account management
Route::resource('/user', UsersController::class);
Route::resource('/course', CoursesController::class);

// Authentication: Login and Register
Auth::routes();

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
