<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeReunion extends Model
{
    use HasFactory;
    protected $fillable = ['idTR'];

    protected $primaryKey = 'idTR';
}
