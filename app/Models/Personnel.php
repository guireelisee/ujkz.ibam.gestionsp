<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;
    protected $fillable = [
        'idP',
        'idCivilite',
        'idTP',
        'nomP',
        'prenomP',
        'telephoneP',
        'emailP',
        'titreP',
        'fonctionP',
        'serviceP',
        'dateNaissanceP',
        'dateRetraiteP',
        'motifPServ',
        'datePServ'
    ];

    protected $primaryKey = 'idP';
}
