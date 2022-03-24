<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublikasisKategoris extends Model
{
    use HasFactory;

    public function kategoris()
    {
        return $this->hasOne(Kategoris::class, 'id', 'kategori')->first();
    }
}
