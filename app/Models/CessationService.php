<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CessationService extends Model
{
    use HasFactory;
    protected $fillable = [
        'idCS',
        'idP',
        'motifCS',
        'dateDecisionCS',
        'dateFinServiceCS'
    ];

    protected $primaryKey = 'idCS';
}
