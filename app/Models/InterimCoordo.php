<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterimCoordo extends Model
{
    use HasFactory;
    protected $fillable = [
        'idIC',
        'idP',
        'idFiliere',
        'dateDebutIC',
        'dateFinIC'
    ];
}
