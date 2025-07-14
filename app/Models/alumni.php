<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class alumni extends Model
{
    protected $table = "alumnis";

    protected $fillable =
    [
        'name',
        'photo',
        'tahun_lulus',
        'status',
        'tempat',
        'jurusan_id',
        'caption'
    ];

    public function jurusan (){
        return $this->belongsTo( jurusan::class, 'jurusan_id', 'id');
    }
}
