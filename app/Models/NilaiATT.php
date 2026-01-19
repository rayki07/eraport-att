<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiATT extends Model
{
    /** @use HasFactory<\Database\Factories\NilaiATTFactory> */
    use HasFactory;

    protected $table = 'nilai_att';

    protected $fillable = [
        'siswa_id',
        'kelas_id',
        'tahun_ajaran_id',
        'semester_id',
        'guru_id',
        'status',
        'catatan_umum',
        'submitted_by',
        'submitted_at',
        'approved_by',
        'approved_at',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function hafalan()
    {
        return $this->hasOne(NilaiHafalan::class);
    }

    public function tahsin()
    {
        return $this->hasOne(NilaiTahsin::class);
    }

    public function ujian()
    {
        return $this->hasOne(NilaiUjian::class);
    }
}
