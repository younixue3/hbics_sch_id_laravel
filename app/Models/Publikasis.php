<?php

namespace App\Models;

use Database\Seeders\UsersPublikasisCreatedSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publikasis extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'publikasis';
    protected $guarded = [];

    public function users_update()
    {
        return $this->belongsTo(UsersPublikasisUpdated::class, 'id', 'publikasi')->first();
    }

    public function users_create()
    {
        return $this->belongsTo(UsersPublikasisCreated::class, 'id', 'publikasi')->first();
    }

    public function kategoris_publikasi()
    {
        return $this->belongsTo(PublikasisKategoris::class, 'id', 'publikasi');
    }

    public function publikasis_contents()
    {
        return $this->belongsTo(PublikasisContents::class, 'id', 'publikasi')->latest()->get();
    }
}
