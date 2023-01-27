<?php

namespace App\Http\Controllers;

use App\Models\Establishment;
use Illuminate\Http\Request;

class EstablishmentController extends Controller
{
    public function create() {

        return view('app.establishment.create');

    }

    public function store(Request $request) {

        $establishment = new Establishment();

        $establishment->email = $request->email;
        $establishment->phone = $request->phone;
        $establishment->address = $request->address;
        $establishment->city = $request->city;
        $establishment->state = $request->state;
        $establishment->password = $request->password;

        $establishment->save();

    }
}
