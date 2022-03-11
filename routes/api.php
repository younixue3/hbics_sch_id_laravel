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
