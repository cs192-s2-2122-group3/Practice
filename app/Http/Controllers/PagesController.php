<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function index() {
        return view('index');
    }

    public function login() {
        return view('login');
    }

    public function signup() {
        return view('signup');
    }

    public function account_manager() {
        return view('account-manager');
    }

    public function course_manager() {
        return view('course-manager');
    }

    public function test_manager() {
        return view('test-manager');
    }
}
