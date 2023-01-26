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


Route::get('/teste', [CalendarController::class, 'teste'])->name('calendar.teste');
Route::get('/calendar/create', [CalendarController::class, 'create'])->name('calendar.create');
Route::post('/calendar', [CalendarController::class, 'store'])->name('calendar.store');


Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
Route::post('/service', [ServiceController::class, 'store'])->name('service.store');


Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');
Route::get('/create', [AgendaController::class, 'create'])->name('agenda.create');
