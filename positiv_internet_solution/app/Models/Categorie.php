<?php

namespace App\Models;

use App\Models\Livre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorie_name',
        'categorie_status',
        'user_id',
    ];

    public function livre()
    {
        return $this->hasMany(Livre::class);
    }
}
