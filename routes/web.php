<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

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
Route::post('/hubungi-kami/sent-message', [App\Http\Controllers\Front\HubungiKamiController::class, 'sent_message'])->name('hubungi-kami.sent-message');
//////////Pendaftaran
Route::get('/pendaftaran', [App\Http\Controllers\Front\PendaftaranController::class, 'index'])->name('pendaftaran');
Route::get('/petunjuk-pendaftaran', [App\Http\Controllers\Front\PendaftaranController::class, 'petunjukPendaftaran'])->name('petunjuk-pendaftaran');
Route::get('/program-beasiswa', [App\Http\Controllers\Front\PendaftaranController::class, 'programBeasiswa'])->name('program-beasiswa');
Route::get('/pendaftaran-siswa-baru', [App\Http\Controllers\Front\PendaftaranController::class, 'pendaftaranSiswaBaru'])->name('pendaftaran-siswa-baru');
Route::get('/kunjungi-kami', [App\Http\Controllers\Front\PendaftaranController::class, 'kunjungiKami'])->name('kunjungi-kami');
Route::post('/kunjungi-kami/sent-kunjungan', [App\Http\Controllers\Front\PendaftaranController::class, 'sent_kunjungan'])->name('kunjungi-kami.sent-kunjungan');
//////////Akademis
Route::get('/akademis', [App\Http\Controllers\Front\AkademisController::class, 'index'])->name('akademis');
foreach (\App\Models\Pages::get() as $key => $value) {
    Route::get('/'.$value->url.'/{id}', [App\Http\Controllers\Front\AkademisController::class, 'pages'])->name($value->url);
}
//Route::get('/kelompok-bermain-taman-kanak-kanak', [App\Http\Controllers\Front\AkademisController::class, 'kelompokBermainTk'])->name('kelompok-bermain-tk');
//Route::get('/sekolah-dasar', [App\Http\Controllers\Front\AkademisController::class, 'sekolahDasar'])->name('sekolah-dasar');
//Route::get('/sekolah-menengah-pertama', [App\Http\Controllers\Front\AkademisController::class, 'sekolahMenengahPertama'])->name('sekolah-menengah-pertama');
//Route::get('/sekolah-menengah-atas', [App\Http\Controllers\Front\AkademisController::class, 'sekolahMenengahAtas'])->name('sekolah-menengah-atas');
////////////Komunitas
Route::get('/alumni/{area}', [App\Http\Controllers\Front\KomunitasController::class, 'alumni'])->name('alumni');
Route::get('/orang-tua', [App\Http\Controllers\Front\KomunitasController::class, 'orangTua'])->name('orang-tua');
Route::get('/teacher-staff/{area}', [App\Http\Controllers\Front\KomunitasController::class, 'teacherStaff'])->name('teacher-staff');
Route::get('/prestasi', [App\Http\Controllers\Front\AkademisController::class, 'prestasiSiswa'])->name('prestasi');
//////////Publikasi
Route::get('/berita', [App\Http\Controllers\Front\PublikasiController::class, 'berita'])->name('berita');
Route::get('/berita/{key}', [App\Http\Controllers\Front\PublikasiController::class, 'show'])->name('berita.show');
Route::get('/acara', [App\Http\Controllers\Front\PublikasiController::class, 'acara'])->name('acara');
Route::get('/acara/{key}', [App\Http\Controllers\Front\PublikasiController::class, 'show'])->name('acara.show');
Route::get('/artikel', [App\Http\Controllers\Front\PublikasiController::class, 'artikel'])->name('artikel');
Route::get('/artikel/{key}', [App\Http\Controllers\Front\PublikasiController::class, 'show'])->name('artikel.show');
Route::get('/publikasi/{key}', [App\Http\Controllers\Front\PublikasiController::class, 'show'])->name('publikasi.show');
Route::post('/acara/{key}/event', [App\Http\Controllers\Front\PublikasiController::class, 'register_event'])->name('publikasi.event');
Route::get('/publikasi/{key}/comment', [App\Http\Controllers\Front\CommentsController::class, 'store'])->name('comment.store');
Route::post('/publikasi/{key}/like', [App\Http\Controllers\Front\LikesController::class, 'liked'])->name('like.insert');
Route::get('/publikasi/{key}/like', [App\Http\Controllers\Front\LikesController::class, 'getliked'])->name('like.get');

Route::name('dashboard.')->prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', [\App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('index');
    Route::resource('staff', \App\Http\Controllers\Dashboard\StaffController::class);
    Route::resource('fasilitas', \App\Http\Controllers\Dashboard\FasilitasController::class);
    Route::resource('komunitas', \App\Http\Controllers\Dashboard\KomunitasController::class);
    Route::resource('event', \App\Http\Controllers\Dashboard\EventController::class);
    Route::resource('petunjuk_pendaftaran', \App\Http\Controllers\Dashboard\PetunjukPendaftaranController::class);
    Route::prefix('komunitas')->group(function () {
        Route::get('/show/alumni', [App\Http\Controllers\Dashboard\KomunitasController::class, 'indexAlumni'])->name('komunitas.alumni');
        Route::get('/show/orang_tua', [App\Http\Controllers\Dashboard\KomunitasController::class, 'indexOrangTua'])->name('komunitas.orangtua');
    });
    Route::resource('prestasi', \App\Http\Controllers\Dashboard\PrestasiController::class);
    Route::resource('publikasi', \App\Http\Controllers\Dashboard\PublikasiController::class);
    Route::resource('teacher_staff', \App\Http\Controllers\Dashboard\TeacherStaffController::class);
    Route::resource('mailbox', \App\Http\Controllers\Dashboard\MailboxController::class);
    Route::resource('pages', \App\Http\Controllers\Dashboard\PagesController::class);
    Route::resource('filosofi-karya', \App\Http\Controllers\Dashboard\FilosofiKaryaController::class);
    Route::resource('sejarah', \App\Http\Controllers\Dashboard\SejarahController::class);
    Route::resource('visi-misi', \App\Http\Controllers\Dashboard\VisiMisiController::class);
    Route::resource('metode-pembelajaran', \App\Http\Controllers\Dashboard\MetodePembelajaranController::class);
    Route::get('/mailbox/sent/mail', [App\Http\Controllers\Dashboard\MailboxController::class, 'sent_index'])->name('mailbox.sent');
//    Route::get('/send-mail', [\App\Mail\HbicsMail::class, 'build'])->name('send.mail');
    Route::get('/send-mailbox/{id}', [\App\Http\Controllers\Mail\MailController::class, 'mailbox'])->name('send.mailbox');
    Route::get('/send-mail/{key}/{audience}', [\App\Http\Controllers\Mail\MailController::class, 'index'])->name('send.mail');
});

