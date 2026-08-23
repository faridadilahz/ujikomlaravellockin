<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('guest.beranda');
});

Route::get('/berita', function () {
    return view('guest.berita');
});

Route::get('/galeri', function () {
    return view('guest.galeri');
});

Route::get('/faq', function () {
    return view('guest.faq');
});
