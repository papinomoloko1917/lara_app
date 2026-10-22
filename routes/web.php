<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');

Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

Route::get('/product/{id}/show', [ProductController::class, 'show'])->name('product.show');

Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');

Route::put('/product/{id}/update', [ProductController::class, 'update'])->name('product.update');

Route::delete('/product/{id}/delete', [ProductController::class, 'destroy'])->name('product.delete');
