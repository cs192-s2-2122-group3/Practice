<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\AnswersController;
use App\Http\Controllers\AttemptsController;

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

// Home Page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Account Management
Route::middleware(['auth','access:admin'])->group(function () {
    Route::get('/user/fetch', [UsersController::class, 'fetch_users']);
    Route::resource('/user', UsersController::class);
});


// Courses Management
Route::middleware(['auth','access:admin'])->group(function () {
    Route::get('/course/fetch', [CoursesController::class, 'fetch_courses']);
    Route::get('/course/create/fetch', [CoursesController::class, 'fetch_create']);
    Route::get('/course/create/add/{id}', [CoursesController::class, 'create_add_user']);
    Route::get('/course/create/remove/{id}', [CoursesController::class, 'create_remove_user']);
    Route::get('/course/{course_id}/edit/fetch', [CoursesController::class, 'fetch_edit']);
    Route::get('/course/{course_id}/edit/add/{id}', [CoursesController::class, 'edit_add_user']);
    Route::get('/course/{course_id}/edit/remove/{id}', [CoursesController::class, 'edit_remove_user']);
    Route::resource('/course', CoursesController::class);
});

// Test Taking / Attempt
Route::middleware(['auth','access:admin,faculty,student'])->group(function () {
    Route::get('/test/archive', [TestsController::class,'archive']);
    Route::get('/test/{id}/take', [TestsController::class,'take']);
    Route::post('/test/{id}/evaluate', [AttemptsController::class,'evaluate']);
    Route::get('/test/{test_id}/attempt/{id}', [AttemptsController::class,'show']);
    Route::get('/test/{test_id}/attempt/{id}/pdf', [AttemptsController::class,'pdf']);
    Route::get('/attempt', [AttemptsController::class,'index']);
});


// Test Management
Route::middleware(['auth','access:admin,faculty'])->group(function () {
    Route::resource('/test', TestsController::class);
    // Test Pages
    Route::get('/test/{id}/items', [ItemsController::class,'index']);
    Route::post('/test/{id}/items', [ItemsController::class,'add_item']);
    Route::delete('/test/{id}/items', [ItemsController::class,'remove_item']);
    Route::get('/test/{id}/items/fetch', [ItemsController::class,'fetch']);
    Route::put('/test/{test_id}/items/{id}/save', [ItemsController::class,'save']);
    // Helper Controllers
    Route::post('/test/{test_id}/items/{id}/answer/', [AnswersController::class,'add_answer']);
    Route::delete('/test/{test_id}/items/{id}/answer/', [AnswersController::class,'remove_answer']);
    Route::get('/test/{test_id}/items/{id}/answer/fetch', [AnswersController::class,'fetch']);
});


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
