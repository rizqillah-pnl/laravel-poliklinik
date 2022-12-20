<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alergi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pasien()
    {
        return $this->belongsTo(pasien::class, 'id_pasien');
    }
}
