<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = [
            'users' => User::all(),
        ];
        return view('user.index', $data);
    }
    public function create(){
        return view('user.create');
    }
}
