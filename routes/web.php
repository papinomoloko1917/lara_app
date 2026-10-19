<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CarController::class, 'show']);
