<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;

    protected $table = 'Programme';

    protected $fillable = [
        'code_programme',
        'nom',
        'ville_id',
    ];
}
