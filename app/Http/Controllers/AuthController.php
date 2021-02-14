<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function doLogin(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        if(
            Auth::attempt(['email' => $email, 'password' => $password])){
                return redirect('/');
            }
        return back()->withErrors(["message" => "Invalid"]);
    }
    public function register(){
        return view('auth.register');
    }
    public function doRegister(Request $request){
            return redirect('/auth/login');
    }
    public function logout(){
       Auth::logout();
       return redirect('/auth/login');
    }
}
