<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
})->name('page.home');

Route::get('/about', function () {
    return view('about');
})->name('page.about');
Route::get('/service', function () {
    return view('service');
})->name('page.service');
Route::get('/exp', function () {
    return view('exp');
})->name('page.exp');
Route::get('/contact', function () {
    return view('contact');
})->name('page.contact');

Route::get('/', function () {
    return view('index');
})->name('page.index');
