<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutorisationAbsence extends Model
{
    use HasFactory;
    protected $fillable = [
        'idAA',
        'idP',
        'motifAA',
        'destinataireAA',
        'dateDepartAA',
        'dateRetourAA'
    ];

    protected $primaryKey = 'idAA';
}
