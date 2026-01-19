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
        'is_active',
    ];

    public function walikelas()
    {
        return $this->belongsTo(Guru::class, 'walikelas_id');
    }

    public function siswa()
    {
        return $this->belongsToMany(Siswa::class, 'kelas_siswa')
            ->withPivot('tahun_ajaran_id', 'semester_id')
            ->withTimestamps();
    }

    public function pengajara()
    {
        return $this->hasMany(PengajarKelas::class);
    }

    
}
