<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CommentController::class, 'show']);

Route::get('/form', [PostController::class, 'form']);

Route::post('/post', [PostController::class, 'store']);
