<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/post/form', [PostController::class, 'form']);
