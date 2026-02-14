<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('features.home.home');
});

Route::get('/services', function () {
    return view('features.services.service');
})->name('services');

Route::get('/about', function () {
    return view('features.about.about');
})->name('about');

Route::get('/contact', function () {
    return view('features.contact.contact');
})->name('contact');
