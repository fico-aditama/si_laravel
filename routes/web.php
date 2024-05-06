<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/profile', 'ProfileController@index')->name('profile');
// Route::put('/profile', 'ProfileController@update')->name('profile.update');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');
