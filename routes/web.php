<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;

Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::resource('buku', BukuController::class);
Route::resource('anggota', AnggotaController::class);
Route::resource('peminjaman', PeminjamanController::class);