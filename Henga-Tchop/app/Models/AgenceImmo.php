<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgenceImmo extends Model
{
    use HasFactory;

    /*
    *@var string
    */
    protected $table = 'AgenceImmo';

    protected $fillable = [
        'nom',
        'coordonne',
        'contact',
    ];
}
