<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }
    public function doLogin(Request $request){
        return redirect('/');
    }
    public function register(){
        return view('register');
    }
    public function doRegister(Request $request){
        return redirect('/login');
    }
}
