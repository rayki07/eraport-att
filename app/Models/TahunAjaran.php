<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    /** @use HasFactory<\Database\Factories\TahunAjaranFactory> */
    use HasFactory;

    protected $table = 'tahun_ajaran';

    protected $fillable = [
        'tahun_mulai',
        'tahun_selesai',
        'is_active',
    ];

    public function semester ()
    {
        return $this->hasMany(Semester::class);
    }
}
