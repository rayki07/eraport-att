<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasSiswa extends Model
{
    /** @use HasFactory<\Database\Factories\KelasSiswaFactory> */
    use HasFactory;

    protected $table = 'kelas_siswa';

    protected $fillabel = [
        'siswa_id',
        'kelas_id',
        'tahun_ajaran_id',
        'no_absen',
    ];


}
