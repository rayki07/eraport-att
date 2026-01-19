<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    /** @use HasFactory<\Database\Factories\MapelFactory> */
    use HasFactory;

    protected $table = 'mapel';

    protected $fillable = [
        'nama_mapel',
        'kategori',
        'deskripsi',
    ];

    public function pengajar ()
    {
        return $this->hasMany(PengajarKelas::class);
    }

    public function ujian()
    {
        return $this->hasMany(Ujian::class);
    }
}
