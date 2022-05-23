<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailboxSents extends Model
{
    use HasFactory;

    public function sents_mailboxsents() {
        return $this->hasOne(Sents::class, 'id', 'sent');
    }

    public function staff_mailboxsents() {
        return $this->hasOne(User::class, 'id', 'staff');
    }
}
