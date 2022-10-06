<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accueil extends Model
{
    use HasFactory;


    protected $fillable = [
        'nom',
        'prenom',
        'date_naissance',
        'email',
        'sexe',
        'telephone',
    ];


}
