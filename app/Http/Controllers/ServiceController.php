<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create() {

        return view('app.config-service');

    }

    public function store() {

        dd('aqui');

    }
}
