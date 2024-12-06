<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class parcel extends Model
{
    //

    //definir laccessibilité à l'utilisateur
    protected $fillable = ['adresse_dep', 'adresse_arr', 'weight'];
}
