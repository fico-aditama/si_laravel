<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    // return view('welcome');
    return View::make('nextjs');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// UserController
Route::get('/user/hapus/{id}', [UserController::class, 'destroy']);
Route::resource('/user', UserController::class);

// BarangController
Route::get('/barang/hapus/{id}', [BarangController::class, 'destroy']);
Route::resource('/barang', BarangController::class);

// SupplierController
Route::get('/supplier/hapus/{id}', [SupplierController::class, 'destroy']);
Route::resource('/supplier', SupplierController::class);

// AkunController
Route::get('/akun/hapus/{id}', [AkunController::class, 'destroy']);
Route::resource('/akun', AkunController::class);

// SettingController
Route::get('/setting', [SettingController::class, 'index'])->name('setting.transaksi');
Route::post('/setting/simpan', [SettingController::class, 'simpan'])->name('setting.simpan');
