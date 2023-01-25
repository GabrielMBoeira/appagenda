<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {

        return view('app.agenda.create');
    }

    public function create()
    {
        return view('app.create');
    }
}
