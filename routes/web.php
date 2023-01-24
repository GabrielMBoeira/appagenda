<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('site');
});

Route::get('/home', function () {
    return view('app.home');
});

Route::get('/config', function () {
    return view('app.config');
});


Route::get('/config-calendar', [CalendarController::class, 'create'])->name('calendar.create');
Route::post('/calendar.store', [CalendarController::class, 'store'])->name('calendar.store');


Route::get('/config-service', [ServiceController::class, 'create'])->name('service.create');
Route::post('/service-store', [ServiceController::class, 'store'])->name('service.store');


Route::post('/agenda', [AgendaController::class, 'index'])->name('agenda.index');
Route::post('/create', [AgendaController::class, 'create'])->name('agenda.create');
