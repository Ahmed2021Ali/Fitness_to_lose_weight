<?php

use Illuminate\Http\Request;
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
        Route::get('/logoutAllDevice', 'logoutAllDevice');
        Route::delete('/delete', 'delete');
    });
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
        // Route::get('/plan', 'plan');
    });
});
///////////////////////////////////   End User Route ///////////////////////////////////


///////////////////////////////////  Plan Route ///////////////////////////////////
Route::controller(\App\Http\Controllers\PlanController::class)->group(function () {
    Route::post('/store/plan', 'storePlan');
    Route::middleware('auth:sanctum')->prefix('plan')->group(function () {
        Route::get('/show', 'show');
        Route::get('/store/{id}', 'store');
    });
});
///////////////////////////////////   End Plan Route ///////////////////////////////////


///////////////////////////////////  Meal Route ///////////////////////////////////
Route::controller(\App\Http\Controllers\MealController::class)->group(function () {
    Route::middleware('auth:sanctum')->prefix('meal')->group(function () {
        Route::get('/show', 'show');
    });
});
///////////////////////////////////   End Meal Route ///////////////////////////////////
