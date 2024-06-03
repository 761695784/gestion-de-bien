<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    protected $fillable = [
        'image',
        'nom',
        'categorie',
        'addresse',
        'DatePubli',
        'statut',
        'description',
    ];
}
