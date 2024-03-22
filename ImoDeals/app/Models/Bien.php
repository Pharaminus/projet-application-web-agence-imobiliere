<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    use HasFactory;

    protected $table = 'Bien';

    protected $fillable = [
        'code_bien',
        'GH',
        'immeuble',
        'num_etage',
        'num_titre',
        'prix',
        'superficie',
        'titre',
        'projet_id',
    ];
}
