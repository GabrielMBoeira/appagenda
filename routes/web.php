<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site');
});

Route::get('/home', function () {
    return view('app.home');
});
