<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/employees', [EmployeeController::class, 'index']);

Route::match(['get', 'post'], '/employees/create', [EmployeeController::class, 'create']);

Route::match(['get', 'post'], '/employee/{id}/edit', [EmployeeController::class, 'edit']);

Route::post('/employee/{id}/delete', [EmployeeController::class, 'delete']);
