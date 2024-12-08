<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;

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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Controllers\JenisSampahController;

Route::get('/jenis-sampah', [JenisSampahController::class, 'index'])->name('jenis-sampah');
<<<<<<< HEAD
=======
use App\Http\Controllers\SampahController;

Route::get('/jenis-sampah', [SampahController::class, 'index']);
>>>>>>> 03026fb (manambahkan landingpage,jenis sampah)
=======
use App\Http\Controllers\JenisSampahController;

Route::get('/', function () {
    return view('portal.landingpage'); // Path diperbarui
})->name('landingpage');

Route::get('/jenis-sampah', [JenisSampahController::class, 'index'])->name('jenis-sampah');
>>>>>>> 9bbb77e (menambahkan jenis sampah)
=======
Route::get('/kategori', [CategoryController::class, 'index'])->name('kategori.index');
Route::get('/kategori/{kategori_id}', [CategoryController::class, 'show'])->name('kategori.show');
>>>>>>> ca3563d (re Jenis sampah)
=======
Route::get('/jenis-sampah', function () {
    return view('portal.jenis-sampah');
})->name('jenis-sampah');

Route::get('/jenis-sampah/{id}', function ($id) {
    return view('portal.detail-jenis-sampah', ['id' => $id]);
})->name('detail-jenis-sampah');

Route::get('login', function () {
    return 'Login Page'; // Ganti dengan halaman login Anda
})->name('login');

<<<<<<< HEAD
>>>>>>> 00bb400 (memperbarui lp)
=======
Route::get('/artikel', [ArtikelController::class, 'daftarArtikel'])->name('daftar-artikel');

Route::get('/artikel/{id}', [ArtikelController::class, 'detailArtikel'])->name('detail-artikel');
>>>>>>> df0d3fe (menambahkan view portal login& register)

require __DIR__.'/auth.php';
