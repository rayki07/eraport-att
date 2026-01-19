<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guru extends Model
{
    /** @use HasFactory<\Database\Factories\GuruFactory> */
    use HasFactory, SoftDeletes;

    protected $table = 'guru';

    protected $fillable = [
        'user_id',
        'nip',
        'nama_lengkap',
        'gelar',
        'jenis_kelamin',
        'foto',
    ];

    public function user ()
    {
        return $this->belongsTo(User::class);
    }

    public function waliKelas()
    {
        return $this->hasMany(Kelas::class, 'walikelas_id');
    }

    public function pengajaraKelas()
    {
        return $this->hasMany(PengajarKelas::class, 'guru_id');
    }

    public function nilaiAtt()
    {
        return $this->hasMany(NilaiATT::class, 'guru_id');
    }

    public function getGenderTextAttribute()
    {
        return $this->gender === 'L' ? 'Laki-laki' : 'Perempuan';
    }
}
