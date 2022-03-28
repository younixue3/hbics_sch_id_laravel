<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersPublikasisUpdated extends Model
{
    use HasFactory;
    protected $table = 'users_publikasis_updated';
    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user')->first();
    }
}
