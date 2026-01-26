<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelas extends Model
{
    /** @use HasFactory<\Database\Factories\KelasFactory> */
    use HasFactory, SoftDeletes;

    protected $table = 'kelas';

    protected $fillable = [
        'rombel',
        'nama_kelas',
        'walikelas_id',
        'tahun_ajaran_id',
        'is_active',
    ];

    public function walikelas()
    {
        return $this->belongsTo(Guru::class, 'walikelas_id');
    }

    public function siswa()
    {
        return $this->belongsToMany(Siswa::class, 'kelas_siswa')
            ->withPivot('siswa_id', 'tahun_ajaran_id')
            ->withTimestamps();
    }

    public function pengajara()
    {
        return $this->hasMany(PengajarKelas::class);
    }

    public function kelasSiswa()
    {
        return $this->hasMany(KelasSiswa::class, 'kelas_id');
    }

    
}
