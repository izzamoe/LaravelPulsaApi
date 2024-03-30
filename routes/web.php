<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



//Route::post('/tokens/create', function (Request $request) {
//    $token = $request->user()->createToken($request->token_name);
//    return ['token' => $token->plainTextToken];
//});

//hello world
Route::get('/', function () {
    return "Hello World";
});


Route::get("/login", function () {
    return "Belum Login";
})->name("login");
