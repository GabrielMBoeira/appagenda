<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EstablishmentController;

Route::get('/', function () {
    return view('site');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/termo-aceite', function () {
    return view('termo-aceite');
});

Route::get('/home', function () {
    return view('app.home');
});

Route::get('/login', function () {
    return view('app.login');
});

Route::get('/config', function () {
    return view('app.config');
});

Route::get('/establishment/create', [EstablishmentController::class, 'create'])->name('establishment.create');
Route::post('/establishment', [EstablishmentController::class, 'store'])->name('establishment.store');

Route::get('/calendar/create', [CalendarController::class, 'create'])->name('calendar.create');
Route::post('/calendar', [CalendarController::class, 'store'])->name('calendar.store');

Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
Route::post('/service', [ServiceController::class, 'store'])->name('service.store');

Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');
Route::get('/create', [AgendaController::class, 'create'])->name('agenda.create');
