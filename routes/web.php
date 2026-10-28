<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('posts', PostController::class)
    ->middleware('visits');

Route::get('/ship', [OrderController::class, 'ship'])->name('ship');

Route::get('/', [UserController::class, 'showRegister'])->name('user.show');

Route::post('/', [UserController::class, 'register'])->name('user.register');

Route::get('/login', [UserController::class, 'showLogin'])->name('user.login.show');

Route::post('/login', [UserController::class, 'login'])->name('user.login');

Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');
