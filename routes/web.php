<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Hai, Saya Ilham Arifin siap belajar Laravel 11";
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/about', function () {
    return view('about');
});
