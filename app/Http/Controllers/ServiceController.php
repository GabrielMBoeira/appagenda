<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create() {

        return view('app.services.create');

    }

    public function store(Request $request) {

        $service = new Service();

        $service->company = 1;
        $service->service = $request->service;
        $service->observation = $request->observation;

        $service->save();

        return redirect()->route('service.create');

    }
}
