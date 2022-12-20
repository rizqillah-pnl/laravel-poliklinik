<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekammds extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function pasients()
    {
        return $this->hasMany(pasien::class);
    }

    public function resep()
    {
        return $this->hasOne(rekammds::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
