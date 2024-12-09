<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::domain('admin.'.env('APP_URL'))->group(function(){
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::get('/', function () {
    return view('portal.welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('portal.edit-profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('portal.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('portal.destroy');
});


Route::middleware(['auth'])->group(function() {
    Route::get('/portal', [ProfileController::class, 'show'])->name('portal.show');
});
Route::post('/portal/update-photo', [ProfileController::class, 'updateProfilePhoto'])->name('profile.update');
require __DIR__.'/auth.php';
