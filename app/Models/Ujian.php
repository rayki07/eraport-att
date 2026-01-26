<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    /** @use HasFactory<\Database\Factories\UjianFactory> */
    use HasFactory;

    protected $table = 'ujian';
    protected $fillable = ['nama_ujian', 'mapel_id'];

    // 1 ujian punya banyak item
    public function items()
    {
        return $this->hasMany(UjianItem::class, 'ujian_id');
    }

    // 1 ujian punya banyak nilai
    public function nilaiUjian()
    {
        return $this->hasMany(NilaiUjian::class,'ujian_id');
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel_id');
    }
}
