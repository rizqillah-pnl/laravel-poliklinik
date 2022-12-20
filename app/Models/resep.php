<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resep extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function rekammdis()
    {
        return $this->belongsTo(rekammds::class, 'id_rekammds');
    }

    public function obt()
    {
        return $this->hasMany(obat::class);
    }
}
