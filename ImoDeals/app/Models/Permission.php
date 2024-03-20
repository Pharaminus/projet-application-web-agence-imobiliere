<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_permission',
        'role_id',
        'description',
        'nom_affiche',
    ];

    public function roles()
    {
        return $this->hasMany(Role::class);
    }

    protected $table = 'permissions';

    public $timestamps = false;
}
