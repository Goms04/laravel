<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stationnement extends Model
{
    use HasFactory;

    protected $fillable=[
        'heure',
        'recupere',
        'personne_id',
        'voiture_id',
    ];

    public function personne()
    {
        return $this->belongsTo(personne::class);
    }

    public function voiture()
    {
        return $this->belongsTo(voiture::class);
    }
}
