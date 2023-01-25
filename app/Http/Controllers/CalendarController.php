<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function create() {

        return view('app.calendar.create');

    }

    public function store() {
        dd('opa');
    }
}
