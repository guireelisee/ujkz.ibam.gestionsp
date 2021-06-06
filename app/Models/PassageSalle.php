<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassageSalle extends Model
{
    use HasFactory;
    protected $fillable = [
        'idPS',
        'idV',
        'motifPSalle',
    ];
}
