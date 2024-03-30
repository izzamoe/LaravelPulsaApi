<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;


// prefix auth
Route::prefix('auth')->group(function () {
    Route::post('/signin', [AuthController::class, 'SignIn']);
    Route::post('/signup', [AuthController::class, 'SignUp']);
    Route::get('/signout', [AuthController::class, 'SignOut'])->middleware('auth:sanctum');
});

//get all token
Route::get('/tokens', function (Request $request) {
    return $request->user()->tokens;
})->middleware('auth:sanctum');

Route::get('/me', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
