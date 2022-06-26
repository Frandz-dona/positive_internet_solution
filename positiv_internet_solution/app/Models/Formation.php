<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $filables = [
        'titre_fromation',
        'description_formation',
        'date_debut_formation',
        'date_fin_formation',
        'auteur_formation',
        'prix_formation',
        'status_formation',
        'photo_couverture_formation',
        'contenu_details_formation',
        'reference_formation',
        'user_id',
    ];
}
