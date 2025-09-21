<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WilayaController;
use App\Http\Controllers\CommunController;
use App\Http\Controllers\PostController;

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/userT', function () {
        return response()->json(['message' => 'Welcome, user!']);
    });

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/getUserfromToken', [UserController::class]);
    Route::post('/logout', [LoginController::class, 'logout']);


    Route::get('/wilayas', [WilayaController::class, 'index']);
    Route::get('/communs', [CommunController::class, 'index']);

    Route::post('/posts', [PostController::class, 'store']);

    // Example protected route for admin
    Route::get('/admin', function () {
        return response()->json(['message' => 'Welcome, admin!']);
    })->middleware('admin');
    // Example protected route for user
    Route::get('/user', function () {
        return response()->json(['message' => 'Welcome, user!']);
    })->middleware('user');
});
