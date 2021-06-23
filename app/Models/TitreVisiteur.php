<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TitreVisiteur extends Model
{
    use HasFactory;
        protected $guarded = ['idTitreV'];

    protected $primaryKey ='idTitreV';
}
