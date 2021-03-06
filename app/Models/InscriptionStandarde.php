<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InscriptionStandarde extends Model
{
    use HasFactory;
    protected $fillable = [
        'idIS',
        'idFiliere',
        'nomIS',
        'prenomIS',
        'anneeIS',
    ];
}
