<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function test_page() {
        return view('test-page');
    }

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

    public function take_test() {
        return view('take-test');
    }

    public function edit_test() {
        return view('edit-test');
    }
    
    public function edit_course() {
        return view('edit-course');
    }

    public function test_results() {
        return view('test-results');
    }

    public function account_page() {
        return view('account-page');
    }

    public function modal_template() {
        return view('modal-template');
    }
}
