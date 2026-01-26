<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UjianItem extends Model
{
    /** @use HasFactory<\Database\Factories\UjianItemFactory> */
    use HasFactory;

        protected $table = 'ujian_item';
    protected $fillable = ['ujian_id', 'nama_item',  'kategori'];

    public function ujian()
    {
        return $this->belongsTo(Ujian::class, 'ujian_id');
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel_id');
    }

    public Function nilaiUjian()
    {
        return $this->hasMany(NilaiUjian::class, 'ujian_item_id');
    }
}
