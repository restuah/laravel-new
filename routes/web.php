<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page',
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog Page',
    ]);
});
