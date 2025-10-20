<?php

use Illuminate\Support\Facades\Route;

// Public Controllers
use App\Http\Controllers\PublicController;

// Admin Controllers
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\JurusanController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\DashboardController;
use App\Models\Galeri;


// Breeze Profile Controller
use App\Http\Controllers\ProfileController;

// Public Routes
Route::get('/', [PublicController::class, 'home']);
Route::get('/profil', [PublicController::class, 'profil']);
Route::get('/jurusan', [PublicController::class, 'jurusan']);
Route::get('/galeri', [PublicController::class, 'galeri']);
Route::get('/berita', [PublicController::class, 'berita']);
Route::get('/kontak', [PublicController::class, 'kontak']);

// Dashboard default (setelah login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Admin Panel (hanya setelah login)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::resource('/profil', ProfilController::class);
    Route::resource('/jurusan', JurusanController::class);
    Route::resource('/galeri', GaleriController::class);
    Route::resource('/berita', BeritaController::class);
    Route::resource('/kontak', KontakController::class);
});

// Profile Edit (default Breeze)
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/galeri', function () {
    $galeris = Galeri::all();
    return view('public.galeri', compact('galeris'));
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('/galeri', GaleriController::class);
});

require __DIR__.'/auth.php';
