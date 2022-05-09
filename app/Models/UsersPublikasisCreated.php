<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersPublikasisCreated extends Model
{
    use HasFactory;

    protected $table = 'users_publikasis_created';
    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user')->first();
    }
}
