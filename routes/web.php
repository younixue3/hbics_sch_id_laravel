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
Route::get('/sejarah', [App\Http\Controllers\Front\TentangKamiController::class, 'sejarah'])->name('sejarah');
Route::get('/visi-misi', [App\Http\Controllers\Front\TentangKamiController::class, 'visiMisi'])->name('visi-misi');
Route::get('/filosofi-pendidikan', [App\Http\Controllers\Front\TentangKamiController::class, 'filosofiPendidikan'])->name('filosofi-pendidikan');
Route::get('/metode-pembelajaran', [App\Http\Controllers\Front\TentangKamiController::class, 'metodePembelajaran'])->name('metode-pembelajaran');
Route::get('/fasilitas', [App\Http\Controllers\Front\TentangKamiController::class, 'fasilitas'])->name('fasilitas');
//////////Hubungi Kami
Route::get('/hubungi-kami', [App\Http\Controllers\Front\HubungiKamiController::class, 'index'])->name('hubungi-kami');
//////////Pendaftaran
Route::get('/pendaftaran', [App\Http\Controllers\Front\PendaftaranController::class, 'index'])->name('pendaftaran');
Route::get('/petunjuk-pendaftaran', [App\Http\Controllers\Front\PendaftaranController::class, 'petunjukPendaftaran'])->name('petunjuk-pendaftaran');
Route::get('/program-beasiswa', [App\Http\Controllers\Front\PendaftaranController::class, 'programBeasiswa'])->name('program-beasiswa');
Route::get('/pendaftaran-siswa-baru', [App\Http\Controllers\Front\PendaftaranController::class, 'pendaftaranSiswaBaru'])->name('pendaftaran-siswa-baru');
Route::get('/kunjungi-kami', [App\Http\Controllers\Front\PendaftaranController::class, 'kunjungiKami'])->name('kunjungi-kami');
//////////Akademis
Route::get('/akademis', [App\Http\Controllers\Front\AkademisController::class, 'index'])->name('akademis');
Route::get('/kelompok-bermain-taman-kanak-kanak', [App\Http\Controllers\Front\AkademisController::class, 'kelompokBermainTk'])->name('kelompok-bermain-tk');
Route::get('/sekolah-dasar', [App\Http\Controllers\Front\AkademisController::class, 'sekolahDasar'])->name('sekolah-dasar');
Route::get('/sekolah-menengah-pertama', [App\Http\Controllers\Front\AkademisController::class, 'sekolahMenengahPertama'])->name('sekolah-menengah-pertama');
Route::get('/sekolah-menengah-atas', [App\Http\Controllers\Front\AkademisController::class, 'sekolahMenengahAtas'])->name('sekolah-menengah-atas');
//////////Komunitas
Route::get('/alumni', [App\Http\Controllers\Front\KomunitasController::class, 'alumni'])->name('alumni');
Route::get('/orang-tua', [App\Http\Controllers\Front\KomunitasController::class, 'orangTua'])->name('orang-tua');
//////////Publikasi
Route::get('/berita', [App\Http\Controllers\Front\PublikasiController::class, 'berita'])->name('berita');
Route::get('/acara', [App\Http\Controllers\Front\PublikasiController::class, 'acara'])->name('acara');
Route::get('/artikel', [App\Http\Controllers\Front\PublikasiController::class, 'artikel'])->name('artikel');

Route::get('dashboard', [\App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('dashboard');
