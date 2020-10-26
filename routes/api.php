<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('personas', App\Http\Controllers\API\personaAPIController::class);

Route::resource('solicituds', App\Http\Controllers\API\solicitudAPIController::class);

Route::resource('tramites', App\Http\Controllers\API\tramiteAPIController::class);