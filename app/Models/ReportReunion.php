<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportReunion extends Model
{
    use HasFactory;
    protected $fillable = [
        'idRR',
        'dateRR',
        'lieuRR'
    ];
}
