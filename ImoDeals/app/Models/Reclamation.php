<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;

    protected $table = 'Reclamation';

    protected $fillable = [
        'commentaire',
        'file',
        'mode',
        'MRC',
        'canal_id',
        'etat_id',
    ];
}
