<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WilayaController;
use App\Http\Controllers\CommunController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ObjectItemController;
use App\Http\Controllers\RequestController;

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/userT', function () {
        return response()->json(['message' => 'Welcome, user!']);
    });

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/getUserfromToken', [UserController::class, 'getUserFromToken']);
    Route::get('/getUserProfile', [UserController::class, 'getUserProfile']);
    Route::post('/logout', [LoginController::class, 'logout']);


    Route::get('/wilayas', [WilayaController::class, 'index']);
    Route::get('/communs', [CommunController::class, 'index']);

    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/objectItems', [ObjectItemController::class, 'index']);

    Route::post('/posts', [PostController::class, 'store']);
    Route::get('/posts', [PostController::class, 'index']);
    Route::get('/posts/{post}', [PostController::class, 'show']);

    Route::post('/requests', [RequestController::class, 'createRequest']);
    Route::get('/requests', [RequestController::class, 'index']);
    Route::get('/requests/{request}', [RequestController::class, 'show']);
    Route::get('/requests/post/{post_id}', [RequestController::class, 'getRequestsByPostId']);
    Route::get('/requests/user/{user_id}', [RequestController::class, 'getRequestsByUserId']);
    Route::put('/requests/{request}/accept', [RequestController::class, 'acceptRequest']);
    Route::put('/requests/{request}/reject', [RequestController::class, 'rejectRequest']);
    Route::put('/requests/{request}', [RequestController::class, 'update']);
    Route::delete('/requests/{request}', [RequestController::class, 'destroy']);

    // Example protected route for admin
    Route::get('/admin', function () {
        return response()->json(['message' => 'Welcome, admin!']);
    })->middleware('admin');
    // Example protected route for user
    Route::get('/user', function () {
        return response()->json(['message' => 'Welcome, user!']);
    })->middleware('user');
});
