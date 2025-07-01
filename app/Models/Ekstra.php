<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ekstra extends Model
{
    protected $fillable = [
            'nama',
            'pembina',
            'gambar',
            'jadwal',
            'deskripsi',
    ];
}
