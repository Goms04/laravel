<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personne extends Model
{
    use HasFactory;


    protected $fillable=[
        'nom',
        'prenom',
        'date_naissance',
        'sexe',
        'email',
    ];

    public function stationnements()
    {
        return $this->hasMany(stationnement::class);
    }
}

