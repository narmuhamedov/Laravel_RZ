<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/feedback', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', function () {
    return dd(Request::all());
//    return "IT IS GOOD";
})->name('contact-form');
