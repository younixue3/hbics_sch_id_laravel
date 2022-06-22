<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;

    public function contents()
    {
        return $this->hasMany(PagesContents::class, 'page', 'id');
    }
}


