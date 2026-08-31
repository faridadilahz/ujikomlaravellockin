<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return redirect()->route('guest.beranda');
});

// 🟢 Route Guest (Semua via GuestController)
Route::get('/beranda', [GuestController::class, 'beranda'])->name('guest.beranda');

Route::get('/berita', [GuestController::class, 'berita'])->name('guest.berita');
Route::get('/berita/{id}', [GuestController::class, 'showBerita'])->name('guest.berita.show');

Route::get('/galeri', [GuestController::class, 'galeri'])->name('guest.galeri');
Route::get('/galeri/{id}', [GuestController::class, 'showGaleri'])->name('guest.galeri.show');

Route::get('/faq', function () {
    return view('guest.faq');
})->name('guest.faq');

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
    Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');
    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');

    Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

    // Kelola Galeri
    Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
    Route::get('/galeri/posting-galeri', [GaleriController::class, 'create'])->name('galeri.posting');
    Route::get('/galeri/{id}', [GaleriController::class, 'show'])->name('galeri.show');
    Route::post('/galeri', [GaleriController::class, 'store'])->name('galeri.store');

    Route::get('/galeri/{id}/edit', [GaleriController::class, 'edit'])->name('galeri.edit');
    Route::put('/galeri/{id}', [GaleriController::class, 'update'])->name('galeri.update');
    Route::delete('/galeri/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');

    // Profil & Kelola Akun
    Route::get('/akun', [ProfileController::class, 'index'])->name('akun');
    Route::get('/akun/edit', [ProfileController::class, 'edit'])->name('akun.edit');
    Route::put('/akun/update', [ProfileController::class, 'update'])->name('akun.update');

    // Kelola Kata Sandi (Preview & Ubah Baru)
    Route::get('/kelolakatasandi', [ProfileController::class, 'kelolasandi'])->name('kelolakatasandi');
    Route::get('/kelolakatasandi/ubah', [ProfileController::class, 'ubahsandi'])->name('kelolakatasandi.ubah');
    Route::put('/kelolakatasandi/update', [ProfileController::class, 'updatesandi'])->name('kelolakatasandi.update');
});