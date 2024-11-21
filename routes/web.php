<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', [
        'nama' => 'Ummu Ghaidah Mutmainnah',
        'title' => 'About Me'
    ]);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'My Blog']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
