<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'Client';

    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'code',
        'email',
        'code_client',
        'observation',
        'profession',
        'ville_id',
    ];
}
