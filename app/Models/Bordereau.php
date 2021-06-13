<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bordereau extends Model
{
    use HasFactory;
    protected $fillable = [
        'idB',
        'idP',
        'naturePieceB',
        'nombrePieceB',
        'observationB',
        'destinataireB',
        'created_at'
    ];

    protected $primaryKey = 'idB';
}