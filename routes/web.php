<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\LaporBanjirController; // Controller dari Modul 4

// Halaman Publik (Warga)
Route::get('/', [LaporBanjirController::class, 'create'])->name('laporan.create');
Route::post('/laporan', [LaporBanjirController::class, 'store'])->name('laporan.store');

// Guest Routes (Auth Manual)
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});

// Protected Routes (Hanya Petugas yang Sudah Login)
Route::middleware('auth')->group(function () {
    Route::get('/laporan', [LaporBanjirController::class, 'index'])->name('laporan.index');
    Route::get('/laporan/{id}', [LaporBanjirController::class, 'show'])->name('laporan.show');
    Route::delete('/laporan/{id}', [LaporBanjirController::class, 'destroy'])->name('laporan.destroy');

    Route::get('/profile', [PetugasController::class, 'profile'])->name('profile');
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
});