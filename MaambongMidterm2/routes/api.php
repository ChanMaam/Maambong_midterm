<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Product Routes
Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

// Category Routes
Route::get('/categories', [CategoriesController::class, 'index']);
Route::post('/categories', [CategoriesController::class, 'store']);
Route::get('/categories/{id}', [CategoriesController::class, 'show']);
Route::put('/categories/{id}', [CategoriesController::class, 'update']);
Route::delete('/categories/{id}', [CategoriesController::class, 'destroy']);
