<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersRoles extends Model
{
    use HasFactory;

    public function roles()
    {
        return $this->hasMany(Roles::class, 'id', 'role');
    }
}
