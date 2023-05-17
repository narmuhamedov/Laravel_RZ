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

Route::get('/contact/all/{id}', 'ContactController@detailMessage')->name('contact-detail-one');


Route::get('/contact/all', 'ContactController@allData')->name('contact-data');


Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');
