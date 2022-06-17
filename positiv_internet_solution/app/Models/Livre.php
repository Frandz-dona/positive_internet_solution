<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    protected  $fillable = [
        'livre_nom',
        'livre_nbr_page',
        'livre_description',
        'livre_prix_version_num',
        'livre_prix_version_pap',
        'livre_prix_promo',
        'livre_date_sortie',
        'livre_image',
        'livre_fichier',
        'livre_auteur',
        'livre_status',
        'user_id',
        'categorie_id'

    ];
}
