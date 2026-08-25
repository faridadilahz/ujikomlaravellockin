<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('guest.beranda');
});

Route::get('/berita', function () {
    return view('guest.berita');
});

Route::get('/galeri', function () {
    return view('guest.galeri');
});

Route::get('/faq', function () {
    return view('guest.faq');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Atmin udah login
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Dasbor
    Route::get('/dasbor', [AdminController::class, 'index'])->name('dasbor');

    // CRUD Berita
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
    Route::get('/berita/posting-berita', [BeritaController::class, 'create'])->name('berita.posting');
    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');

    Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
    
    // Kelola Galeri
    Route::get('/galeri', [AdminController::class, 'galeri'])->name('galeri');
    Route::get('/galeri/posting-galeri', [AdminController::class, 'postingGaleri'])->name('galeri.posting');

    // FAQ & Profil
    Route::get('/faq', [AdminController::class, 'faq'])->name('faq');
    Route::get('/profil', [AdminController::class, 'profil'])->name('profil');
});