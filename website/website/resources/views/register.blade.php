<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seehane</title>
</head>
<body>
    <h1>Save the date</h1>

    <a href="{{ url('/') }}"> homepage</a>

<form action="{{url('/register') }}" method="post">
    @csrf
    <label for="adresse_dep">adresse de départ</label>
    <input type="text" name="adresse_dep" placeholder="adresse départ">
    <br>
    <label for="adresse_arr">adresse arrivée</label>
    <input type="text" name="adresse_arr" placeholder="adresse arrivée">
    <br>
    <label for="weight">poid du colis en grammes</label>
    <input type="number" name="weight" placeholder="poids grammes">
    <br>
    <button type="submit">envoyer</button>
</form>

@if (isset($message))
    <p>{{$message}}</p>
@endif

</body>
</html>