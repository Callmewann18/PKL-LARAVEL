<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/galery', function (){
    return view('galery');
});

Route::get('/kontak', function (){
    return view('kontak');
});

Route::get('/home', function (){
    return view('home');
});

Route::group(['middleware' => 'guest'], function () {

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::get('posts',[PostController::class,'index']);
Route::get('posts/create',[PostController::class,'create']);
Route::post('posts/store',[PostController::class,'store']);
Route::get('posts/{post}/show',[PostController::class,'show']);
Route::get('posts/{post}/edit',[PostController::class,'edit']);
Route::put('posts/{post}/update',[PostController::class,'update']);
Route::delete('posts/{post}/delete',[PostController::class,'destroy']);

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [HomeController::class, 'index']); 
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

