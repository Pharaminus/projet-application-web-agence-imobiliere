<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    // public function login(){
    //     return view('auth.login');
    // }

    // public function register(){
    //     return view('auth.register');
    // }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
