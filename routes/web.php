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

Route::get('/privacy-policy', function () {
    return view('features.legal.privacy');
})->name('privacy.policy');

Route::get('/terms-of-use', function () {
    return view('features.legal.terms');
})->name('terms.use');
