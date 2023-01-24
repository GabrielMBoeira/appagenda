<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function create() {

        return view('app.config-calendar');

    }

    public function store() {
        dd('opa');
    }
}
