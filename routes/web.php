<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;


Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('/migraterefresh', function () {
    Artisan::call('migrate:refresh');
});

Route::get('/', [BlogController::class, 'index']);
Route::get('/blogs/create', [BlogController::class, 'create']);
Route::post('/blogs', [BlogController::class, 'store'])->middleware('auth');
Route::get('/blogs/{blog}', [BlogController::class, 'show']);
Route::get('/blogs/user/{user}', [BlogController::class, 'showByUser']);


Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/users', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');
Route::post('/update', [UserController::class, 'update'])->middleware('auth');