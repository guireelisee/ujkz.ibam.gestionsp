<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeHebergement extends Model
{
    use HasFactory;
    protected $fillable = [
        'idDH',
        'idP',
        'idV',
        'idTM',
        'nomOccupDH',
        'prenomOccupDH',
        'provenanceDH',
        'motidSejourDH',
        'volumeHoraireDH',
        'disciplineDH',
        'cadreDH',
        'departementDH',
        'dateSoutenanceDH',
        'themeSoutenanceDH',
        'autreMotifDH',
        'dateDebutSejourDH',
        'dateFinSejourDH'
    ];
}
