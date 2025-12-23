<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
		return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/songs/{genre}', [SongController::class, 'genre'])->name('songs.genre');

Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
