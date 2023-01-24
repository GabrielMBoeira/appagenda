<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index() {

        dd();

    }

    public function create()
    {
        return view('app.create');

    }
}
