<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// UserController
Route::get('/user/hapus/{id}', [UserController::class, 'destroy']);
Route::resource('/user', UserController::class);


// Route::get('/profile', 'ProfileController@index')->name('profile');
// Route::put('/profile', 'ProfileController@update')->name('profile.update');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');
