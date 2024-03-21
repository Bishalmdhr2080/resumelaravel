<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('page.home');

Route::get('/about', function () {
    return view('about');
})->name('page.about');
Route::get('/service', function () {
    return view('service');
})->name('page.service');
Route::get('/resume', function () {
    return view('resume');
})->name('page.resume');
Route::get('/contact', function () {
    return view('contact');
})->name('page.contact');
