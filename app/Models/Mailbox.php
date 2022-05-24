<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mailbox extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'mailbox';

    public function kunjungan() {
        return $this->hasOne(Kunjungans::class, 'id', 'kunjungan')->first();
    }

    public function mailboxsents_mailbox() {
        return $this->belongsTo(MailboxSents::class, 'id', 'mailbox')->first();
    }
}
