<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeSalle extends Model
{
    use HasFactory;
    protected $fillable = [
        'idDS',
        'idV',
        'dateDepotDS',
        'destinataireDS',
        'dateOccupDS',
        'dateFinDS',
        'motifDS'
    ];
}
