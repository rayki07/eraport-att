<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
    /** @use HasFactory<\Database\Factories\SiswaFactory> */
    use HasFactory, SoftDeletes;

    protected $table = 'siswa';

    protected $fillable = [
        'nis',
        'nisn',
        'nama',
        'nama_panggilan',
        'jenis_panggilan',
        'jenis_kelamin',
        'status',
        'foto',
    ];

    public function kelas ()
    {
        return $this->belongsToMany(Kelas::class, 'kelas_siswa')
            ->withPivot('tahun_ajaran_id')
            ->withTimestamps();
    }

    public function nilaiAtt()
    {
        return $this->hasMany(NilaiATT::class);
    }

    public function raportAtt()
    {
        return $this->hasMany(RaportATT::class);
    }

    public function getGenderTextAttribute()
    {
        return $this->gender === 'L' ? 'Laki-laki' : 'Perempuan';
    }
}
