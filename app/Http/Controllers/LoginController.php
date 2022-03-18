<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller{
    public function authenticate(Request $request){
        // Retrive Input
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // if success login

            return redirect('berhasil');

            //return redirect()->intended('/details');
        }
        // if failed login
        return redirect('login');
    }
}
