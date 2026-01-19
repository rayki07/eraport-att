<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiHafalan extends Model
{
    /** @use HasFactory<\Database\Factories\NilaiHafalanFactory> */
    use HasFactory;

    protected $table = 'nilai_hafalan';

    protected $fillable = [
        'nilai_att_id',
        'target',
        'surah_mulai',
        'surah_selesai',
        'nilai',
        'catatan',
    ];

    public function nilaiAtt()
    {
        return $this->belongsTo(NilaiATT::class);
    }
}
