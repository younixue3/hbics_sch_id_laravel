<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SentsStaffs extends Model
{
    use HasFactory;

    public function staffs_sentsstaffs() {
        return $this->hasOne(User::class, 'id', 'staff')->first();
    }

    public function sent_sentsstaffs() {
        return $this->hasOne(Sents::class, 'id', 'sent')->first();
    }
}
