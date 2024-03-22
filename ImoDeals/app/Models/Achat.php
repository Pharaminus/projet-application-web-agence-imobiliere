<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    use HasFactory;

    protected $table = 'Achat';

    protected $fillable = [
        'mode',
        'bien_id',
        'client_id',
        
    ];
}
