<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Models\Post;
use App\Models\Gallery;
use App\Mail\HelloMail;
use Illuminate\Support\Facades\Mail;

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
    $posts = Post::all();
    $posts_count = $posts->count();
    return view('berita', [
        'posts' => $posts->random($posts_count > 5 ? 5 : $posts_count)->collect(),
    ]);
});

Route::get('/galery', function () {
    $gallery = Gallery::all();
    $gallery_count = $gallery->count();
    return view('galery', [
        'gallery' => $gallery->random($gallery_count > 5 ? 5 : $gallery_count)->collect(),
    ]);
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

Route::get('gallery',[GalleryController::class,'index']);
Route::get('gallery/create',[GalleryController::class,'create']);
Route::post('gallery/store',[GalleryController::class,'store']);
Route::get('gallery/{post}/show',[GalleryController::class,'show']);
Route::get('gallery/{post}/edit',[GalleryController::class,'edit']);
Route::put('gallery/{post}/update',[GalleryController::class,'update']);
Route::delete('gallery/{post}/delete',[GalleryController::class,'destroy']);

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [HomeController::class, 'index']); 
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::post('/contact', [ContactController::class, 'sendContactForm'])->name('contact.send');


