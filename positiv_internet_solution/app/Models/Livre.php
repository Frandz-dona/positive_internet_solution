<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'categorie_id',

    ];

    public function categories()
    {
        return $this->belongsTo(Categorie::class);
    }

}
