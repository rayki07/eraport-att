<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiTahsin extends Model
{
    /** @use HasFactory<\Database\Factories\NilaiTahsinFactory> */
    use HasFactory;

    protected $table = 'nilai_tahsin';

    protected $fillable = [
        'nilai_att_id',
        'jenis_mulai',
        'jenis_selesai',
        'jilid_mulai',
        'jilid_selesai',
        'halaman_mulai',
        'halaman_selesai',
        'juz_mulai',
        'juz_selesai',
        'surah_mulai',
        'surah_selesai',
        'ayat_mulai',
        'ayat_selesai',
        'nilai',
        'catatan',
    ];

    public function nilaiAtt()
    {
        return $this->belongsTo(NilaiATT::class);
    }
}
