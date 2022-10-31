<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\
{
    AuthController,
    DashboardController,
    BarangController,
    TempatController,
    KategoriController,
};

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('/barang/data', BarangController::class);
Route::resource('/barang', BarangController::class);

Route::resource('/tempat/data', TempatController::class);
Route::resource('/tempat', TempatController::class);

Route::resource('/kategori/data', KategoriController::class);
Route::resource('/kategori', KategoriController::class);