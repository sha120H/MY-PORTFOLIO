<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

// 👉 Idagdag ito para sa Skills:
Route::get('/skills', function () {
    return view('skills');
})->name('skills');
Route::get('/education', function () {
    return view('education');
})->name('education');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');