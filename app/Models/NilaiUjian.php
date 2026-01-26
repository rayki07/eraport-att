<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiUjian extends Model
{
    /** @use HasFactory<\Database\Factories\NilaiUjianFactory> */
    use HasFactory;

    protected $table = "nilai_ujian";
    protected $fillable = [
        'nilai_att_id', 'ujian_id', 'ujian_item_id',
        'nilai', 'catatan' ];

    public function ujian()
    {
        return $this->belongsTo(Ujian::class, 'ujian_id');
    }

    public function ujianItem()
    {
        return $this->belongsTo(UjianItem::class, 'ujian_item_id');
    }

    public function nilaiAtt()
    {
        return $this->belongsTo(NilaiATT::class);
    }

}
