<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SampahController;
use App\Http\Middleware\AdminMiddleware;
<<<<<<< HEAD
=======
>>>>>>> df0d3fe (menambahkan view portal login& register)
=======
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SampahController;
>>>>>>> e0712a9 (login& regis)
=======
>>>>>>> 218f793 (edit artikel)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Controllers\JenisSampahController;

<<<<<<< HEAD
Route::get('/jenis-sampah', [JenisSampahController::class, 'index'])->name('jenis-sampah');
<<<<<<< HEAD
=======
use App\Http\Controllers\SampahController;

Route::get('/jenis-sampah', [SampahController::class, 'index']);
>>>>>>> 03026fb (manambahkan landingpage,jenis sampah)
=======
=======
>>>>>>> 843ac0d9d7308dee49a60d945601c9e8ffd344da
use App\Http\Controllers\JenisSampahController;

=======
use App\Http\Controllers\JenisSampahController;

>>>>>>> 9bbb77e (menambahkan jenis sampah)
Route::get('/', function () {
    return view('portal.landingpage'); // Path diperbarui
})->name('landingpage');

Route::get('/jenis-sampah', [JenisSampahController::class, 'index'])->name('jenis-sampah');
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e0712a9 (login& regis)
Route::get('/portal/artikel', [ArtikelController::class, 'daftarArtikel'])->name('artikel.daftar');
Route::get('/portal/artikel/{id}', [ArtikelController::class, 'detailArtikel'])->name('artikel.detail');
=======
Route::resource('articles', ArticleController::class);
>>>>>>> 218f793 (edit artikel)
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.post');
Route::get('dashboard', function () {
    return view('portal.dashboard');
})->name('dashboard')->middleware('auth');
<<<<<<< HEAD

// Logout Route
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('kelola-sampah', [SampahController::class, 'index'])->name('sampah.kelola');
=======
use App\Http\Controllers\SampahController;

Route::get('/jenis-sampah', [SampahController::class, 'index']);
>>>>>>> 03026fb (manambahkan landingpage,jenis sampah)
=======
>>>>>>> 9bbb77e (menambahkan jenis sampah)
=======
Route::get('/jenis-sampah', [JenisSampahController::class, 'index'])->name('jenis-sampah');
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

>>>>>>> 00bb400 (memperbarui lp)
=======
Route::get('/artikel', [ArtikelController::class, 'daftarArtikel'])->name('daftar-artikel');

Route::get('/artikel/{id}', [ArtikelController::class, 'detailArtikel'])->name('detail-artikel');
>>>>>>> df0d3fe (menambahkan view portal login& register)
=======

// Logout Route
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('kelola-sampah', [SampahController::class, 'index'])->name('sampah.kelola');
>>>>>>> e0712a9 (login& regis)

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
=======
>>>>>>> 843ac0d9d7308dee49a60d945601c9e8ffd344da

require __DIR__.'/auth.php';
