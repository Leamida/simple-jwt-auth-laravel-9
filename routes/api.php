<?php

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

Route::prefix('auth/')->controller(App\Http\Controllers\AuthController::class)->group(function () {
    Route::post('signin', 'signin');
    Route::post('signup', 'signup');
    Route::post('signout', 'signout');
    Route::post('refresh', 'refresh');
});
