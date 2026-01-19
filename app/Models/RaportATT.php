<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaportATT extends Model
{
    /** @use HasFactory<\Database\Factories\RaportATTFactory> */
    use HasFactory;

    protected $table = 'raport_att';

    protected $fillable = [
        'siwa_id',
        'kelas_id',
        'tahun_ajaran_id',
        'semester_id',
        'catatan',
        'is_printed',
        'print_token',
        'is_locked',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
