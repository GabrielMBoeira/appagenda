<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateEstablishmentFormRequest;
use App\Models\Establishment;
use Illuminate\Http\Request;

class EstablishmentController extends Controller
{
    public function create()
    {

        return view('app.establishment.create');
    }

    public function store(StoreUpdateEstablishmentFormRequest $request)
    {

        $establishment = new Establishment();

        $establishment->email    = $request->email;
        $establishment->phone    = $request->phone;
        $establishment->name     = $request->name;
        $establishment->address  = $request->address;
        $establishment->city     = $request->city;
        $establishment->state    = $request->state;
        $establishment->password = bcrypt($request->password);

        return redirect()->route('establishment.create')->with('msg', 'Estabelecimento cadastrado com sucesso!');
    }
}
