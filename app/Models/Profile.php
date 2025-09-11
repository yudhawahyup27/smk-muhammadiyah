<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        "name",
        "slogan",
        "tahun_berdiri",
        "akreditasi",
        "alamat",
        "sejarah",
        "visi",
        "misi",
        "email",
        "telepon",
        "instagram",
        "web",
    ];
}
