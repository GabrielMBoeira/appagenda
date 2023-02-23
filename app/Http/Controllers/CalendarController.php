<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function create() {

        return view('app.calendar.create');

    }

    public function store(Request $request) {

        $calendar = new Calendar();

    }

    public function teste() {
        return view('teste');
    }
}
