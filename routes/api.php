<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [UserController::class, 'signIn']);
Route::post('register', [UserController::class, 'signUp']);

Route::middleware('auth.jwt')->group(function () {

    Route::get('category-products', [CategoryProductController::class, 'index']);
    Route::get('category-products/{id}', [CategoryProductController::class, 'show']);
    Route::post('category-products', [CategoryProductController::class, 'store']);
    Route::put('category-products/{id}', [CategoryProductController::class, 'update']);
    Route::delete('category-products/{id}', [CategoryProductController::class, 'destroy']);

    Route::get('products', [ProductController::class, 'index']);
    Route::get('products/{id}', [ProductController::class, 'show']);
    Route::post('products', [ProductController::class, 'store']);
    Route::put('products/{id}', [ProductController::class, 'update']);
    Route::delete('products/{id}', [ProductController::class, 'destroy']);
});
