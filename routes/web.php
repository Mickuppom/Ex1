<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/hello/{name}/{age}', [HomeController::class, 'hello']);

//category
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category/store', [CategoryController::class, 'store']);
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::get('/category/delete/{id}', [CategoryController::class, 'delete']);
Route::post('/category/update/{id}', [CategoryController::class, 'update']);

//user
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user/store', [UserController::class, 'store']);
Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::get('/user/delete/{id}', [UserController::class, 'delete']);
Route::post('/user/update/{id}', [UserController::class, 'update']);

//post
Route::get('/post', [PostController::class, 'index']);
Route::get('/post/create', [PostController::class, 'create']);
Route::post('/post/store', [PostController::class, 'store']);
Route::get('/post/edit/{id}', [PostController::class, 'edit']);
Route::get('/post/delete/{id}', [PostController::class, 'delete']);
Route::post('/post/update/{id}', [PostController::class, 'update']);

//Login Register User
Route::get('/auth/login', [AuthController::class, 'login'])->name("login");
Route::post('/auth/doLogin', [AuthController::class, 'doLogin']);
Route::get('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/doRegister', [AuthController::class, 'doRegister']);
Route::get('/auth/logout', [AuthController::class, 'logout']);
