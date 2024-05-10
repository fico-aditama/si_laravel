<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\SettingController;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// UserController
Route::get('/user/hapus/{id}', [UserController::class, 'destroy']);
Route::resource('/user', UserController::class);

// BarangController
Route::get('/user/hapus/{id}', [BarangController::class, 'destroy']);
Route::resource('/user', BarangController::class);

// SupplierController
Route::get('/user/hapus/{id}', [SupplierController::class, 'destroy']);
Route::resource('/user', SupplierController::class);

// MasterAkunController
Route::get('/akun/hapus/{id}', [AkunController::class, 'destroy']);
Route::resource('/akun', AkunController::class);

// SettingController
Route::get('/setting', [SettingController::class, 'index'])->name('setting.transaksi');
Route::post('/setting/simpan','SettingController@simpan');
