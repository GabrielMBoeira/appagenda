<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site');
});

Route::get('/home', function () {
    return view('app.home');
});

Route::get('/create', function () {
    return view('app.create');
});

Route::get('/config', function () {
    return view('app.config');
});

Route::get('/config-calendar', function () {
    return view('app.config-calendar');
});

Route::get('/config-service', function () {
    return view('app.config-service');
});
