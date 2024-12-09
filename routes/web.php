<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SampahController;
use App\Http\Middleware\AdminMiddleware;

Route::domain('admin.'.env('APP_URL'))->group(function(){
    Route::get('/', function () {
        return view('welcome');
    });
});
//landingpage
Route::get('/', function () {
    return view('portal.landingpage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('about_me', function () {
    return view('portal.about_me'); 
});

Route::get('/jenis-sampah', function () {
    return view('portal.jenis-sampah');
})->name('jenis-sampah');

Route::get('/jenis-sampah/{id}', function ($id) {
    return view('portal.detail-jenis-sampah', ['id' => $id]);
})->name('detail-jenis-sampah');

Route::get('login', function () {
    return 'Login Page'; // Ganti dengan halaman login Anda
})->name('login');

Route::resource('articles', ArticleController::class);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.post');
Route::get('dashboard', function () {
    return view('portal.dashboard');
})->name('dashboard')->middleware('auth');

// Logout Route
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('kelola-sampah', [SampahController::class, 'index'])->name('sampah.kelola');

// Rute CRUD hanya untuk admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/portal/artikel/tambah', [ArtikelController::class, 'tambahArtikel'])->name('artikel.tambah');
    Route::post('/portal/artikel/simpan', [ArtikelController::class, 'simpanArtikel'])->name('artikel.simpan');
    Route::get('/portal/artikel/{id}/edit', [ArtikelController::class, 'editArtikel'])->name('artikel.edit');
    Route::put('/portal/artikel/{id}', [ArtikelController::class, 'updateArtikel'])->name('artikel.update');
    Route::delete('/portal/artikel/{id}', [ArtikelController::class, 'hapusArtikel'])->name('artikel.hapus');
});

// Rute umum untuk semua pengguna
Route::get('/portal/artikel', [ArtikelController::class, 'daftarArtikel'])->name('artikel.daftar');
Route::get('/portal/artikel/{id}', [ArtikelController::class, 'detailArtikel'])->name('artikel.detail');

require __DIR__.'/auth.php';
