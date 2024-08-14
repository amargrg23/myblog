<?php

//use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function() {
    Route::resource('posts', PostController::class);
    //Route::resource('photos', PhotoController::class);
    Route::get('/home', [PostController::class, 'index'])->name('home');
});

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    // Dashboard - using the index method from AdminMiddleware
    Route::get('/', [AdminMiddleware::class, 'index']);

    // User management
    //Route::resource('users', UserController::class);

    // Blog post management
    //Route::resource('posts', BlogPostController::class);
});

Auth::routes();

