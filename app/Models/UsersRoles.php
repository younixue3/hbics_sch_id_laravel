<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsersRoles extends Model
{
    use HasFactory, SoftDeletes;

    public function roles()
    {
        return $this->hasOne(Roles::class, 'id', 'role')->first();
    }
}
