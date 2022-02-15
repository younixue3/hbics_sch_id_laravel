<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });


Auth::routes();
Route::get('/logout', function() {
    Auth::logout();
    return redirect('/');
});

//FrontPage
///////////Home
Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index'])->name('home');
//////////Tentang Kami
Route::get('/tentang-kami', [App\Http\Controllers\Front\TentangKamiController::class, 'index'])->name('tentang-kami');
//////////Hubungi Kami
Route::get('/hubungi-kami', [App\Http\Controllers\Front\HubungiKamiController::class, 'index'])->name('hubungi-kami');
