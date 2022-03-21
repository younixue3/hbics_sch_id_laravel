<?php

use App\Helper\getUrl, App\Helper\getUrlDashboard;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getUrl', function () {
    return response()->json(getUrl::getUrl());
});

Route::get('getUrlDashboard', function () {
    return response()->json(getUrlDashboard::getUrl());
});

//DATA API GET

Route::get('getFasilitas', [\App\Http\Controllers\Front\Data\api\FasilitasController::class, 'getFasilitas'])->name('api.getFasilitas');
Route::get('getFasilitasAll', [\App\Http\Controllers\Front\Data\api\FasilitasController::class, 'getFasilitasAll'])->name('api.getFasilitasAll');
