<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voiture extends Model
{
    use HasFactory;
    protected $fillable=[
        'marque',
        'model',
        'couleur',
        'immatriculation',
        'disponible',
    ];
}
