<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsightLikes extends Model
{
    use HasFactory;

    protected $table = 'insight_likes';
    protected $guarded = [];
}
