<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FonctionVisiteur extends Model
{
    use HasFactory;
    protected $fillable = [
        'idFonctionV',
        'intituleFonctionV'
    ];

    protected $primaryKey ='idFonctionV';
}
