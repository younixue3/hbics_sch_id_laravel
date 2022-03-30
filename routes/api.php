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
Route::get('getTestimoni', [\App\Http\Controllers\Front\Data\api\HomeController::class, 'getTestimoni'])->name('api.getTestimoni');
Route::get('getTestimoniHhk', [\App\Http\Controllers\Front\Data\api\AkademisController::class, 'get_prestasi_hhk'])->name('api.getTestimoniHhk');
Route::get('getTestimoniSdk', [\App\Http\Controllers\Front\Data\api\AkademisController::class, 'get_prestasi_sdk'])->name('api.getTestimoniSdk');
Route::get('getTestimoniSmpk', [\App\Http\Controllers\Front\Data\api\AkademisController::class, 'get_prestasi_smpk'])->name('api.getTestimoniSmpk');
Route::get('getTestimoniSmak', [\App\Http\Controllers\Front\Data\api\AkademisController::class, 'get_prestasi_smak'])->name('api.getTestimoniSmak');
Route::get('getHeroAlumni', [\App\Http\Controllers\Front\Data\api\KomunitasController::class, 'get_data_hero_alumni'])->name('api.getHeroAlumni');
Route::get('getHeroOrangTua', [\App\Http\Controllers\Front\Data\api\KomunitasController::class, 'get_data_orang_tua'])->name('api.getHeroOrangTua');
