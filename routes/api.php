<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



///////////////////////////////////  Authentication Route ///////////////////////////////////
Route::controller(\App\Http\Controllers\AuthenticationController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::post('register', 'register');
        Route::post('login', 'login');
    });
    Route::middleware('auth:sanctum')->prefix('user')->group(function () {
        Route::PUT('/update', 'update');
        Route::get('/logout', 'logout');
        Route::delete('/delete', 'delete');
        Route::get('/getUser', 'getUser');
    });
    // https://fast.alsafwa1.com/api/user/getUser
});
///////////////////////////////////   End Authentication Route ///////////////////////////////////


///////////////////////////////////  Question Route ///////////////////////////////////
Route::controller(\App\Http\Controllers\QuestionController::class)->group(function () {
    Route::prefix('question')->group(function () {
        Route::get('/show', 'show');
    });
});
///////////////////////////////////   End Question Route ///////////////////////////////////


///////////////////////////////////  Info Route ///////////////////////////////////
Route::controller(\App\Http\Controllers\InfoController::class)->group(function () {
    // eng.Mohamed Samy
    Route::get('/showAllInfo', 'showAllInfo');
    Route::middleware('auth:sanctum')->prefix('info')->group(function () {
        Route::post('/store', 'store');
    });
});
///////////////////////////////////   End Info Route ///////////////////////////////////


///////////////////////////////////  User Route ///////////////////////////////////
Route::controller(\App\Http\Controllers\UserController::class)->group(function () {
    Route::get('/getAllUser', 'getAllUser');
    Route::middleware('auth:sanctum')->prefix('user')->group(function () {
        Route::get('/info', 'info');
         Route::get('/plan', 'plan');
    });
});
///////////////////////////////////   End User Route ///////////////////////////////////


///////////////////////////////////  Plan Route ///////////////////////////////////
Route::controller(\App\Http\Controllers\PlanController::class)->group(function () {
    Route::middleware('auth:sanctum')->prefix('plans')->group(function () {
       Route::get('/show', 'show');
        Route::get('/store/{id}', 'store');
    });
});
///////////////////////////////////   End Plan Route ///////////////////////////////////


///////////////////////////////////  Process Route ///////////////////////////////////
Route::controller(\App\Http\Controllers\ProcessController::class)->group(function () {
    Route::middleware('auth:sanctum')->prefix('process')->group(function () {

    });
});
///////////////////////////////////   End Process Route ///////////////////////////////////
