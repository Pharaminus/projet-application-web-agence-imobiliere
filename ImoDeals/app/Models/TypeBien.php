<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeBien extends Model
{
    use HasFactory;

    protected $table = 'TypeBien';

    protected $fillable = [
        'nom',
    ];
}
