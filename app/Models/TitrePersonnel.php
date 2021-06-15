<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TitrePersonnel extends Model
{
    use HasFactory;
    protected $fillable = [
        'idTitreP',
        'intituleTitreP'
    ];

    protected $primaryKey ='idTitreP';
}
