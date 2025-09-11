<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class alumni extends Model
{

    use HasFactory;
    protected $table = "alumnis";

    protected $fillable =
    [
        'name',
        'photo',
        'tahun_lulus',
        'status',
        'angkatan',
        'tempat',
        'jurusan_id',
        'caption'
    ];


    public function jurusan (){
        return $this->belongsTo( Jurusan::class, 'jurusan_id', 'id');
    }
}
