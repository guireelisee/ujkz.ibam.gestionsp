<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model
{
    use HasFactory;
    protected $fillable = [
        'idV',
        'idCivilite',
        'nomV',
        'prenomV',
        'telephoneV',
        'serviceV',
        'emailV',
        'titreV',
        'fonctionV'
    ];
}
