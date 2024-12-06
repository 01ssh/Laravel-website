<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function home_index()
    {
        $parcels = parcel::all();

        return view('home', ['parcels' => $parcels]);
    }
}
