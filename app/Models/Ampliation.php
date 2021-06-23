<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ampliation extends Model
{
    use HasFactory;
    protected $guarded = [
        'idAmp',
    ];

    protected $primaryKey = 'idAmp';
}
