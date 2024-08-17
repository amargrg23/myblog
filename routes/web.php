<?php

//use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\UserController as AdminUserController;


Route::get('/', function () {
    return view('welcome');
});

// Regular User Routes
Route::group(['middleware' => ['auth']], function() {
    Route::resource('posts', PostController::class);

    Route::get('/home', [PostController::class, 'index'])->name('home');
});

// Admin Routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    // Dashboard
    Route::get('/', [AdminMiddleware::class, 'index'])->name('dashboard');

    // User management
    Route::resource('users', AdminUserController::class);

    // Blog post management
    Route::resource('posts', AdminPostController::class);
});


Auth::routes();

