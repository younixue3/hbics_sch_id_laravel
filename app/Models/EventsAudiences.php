<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventsAudiences extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function events()
    {
        return $this->hasOne(Events::class, 'id', 'event')->first();
    }

    public function audiences()
    {
        return $this->hasOne(Audiences::class, 'id', 'audience')->first();
    }
}
