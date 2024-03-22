<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $table = 'Projet';

    protected $fillable = [
        'code_projet',
        'nom',
        'programme_id',
    ];
}
