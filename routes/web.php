<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\SampahController;

Route::get('/jenis-sampah', [SampahController::class, 'index']);

require __DIR__.'/auth.php';
