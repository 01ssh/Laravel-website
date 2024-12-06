<?php


use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;
use App\Models\Parcel;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', function(HttpRequest $request) {
    $message = "Colis Enregistré !";

    // valider les champs du formulaire
    $validator = Validator::make($request->all(), [
        'adresse_dep' => 'required|string | max:255',
        'adresse_arr' => 'required|string | max:255',
        'weight' => 'required|numeric | min:1',
    ]);

    if ($validator->fails()) {
        $message = $validator->errors()->first();
        return view('register', ['message' => $message]);
    }

    $parcel = Parcel::create([
        'adresse_dep' => $request->adresse_dep,
        'adresse_arr' => $request->adresse_arr,
        'weight' => $request->weight,
    ]);

    return view('register', ['message' => $message]);
});