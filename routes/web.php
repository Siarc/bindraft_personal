<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('features.home.home');
});

Route::get('/services', function () {
    return view('features.services.service');
})->name('services');
