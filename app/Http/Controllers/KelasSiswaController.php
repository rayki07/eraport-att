<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\TahunAjaran;
use App\Models\Semester;

class KelasSiswaController extends Controller
{
    protected $table = 'kelas_siswa';

    protected $fillable = ['siswa_id', 'kelas_id', 'tahun_ajaran_id'];

    public function siswa()
    {
        return $this->belongTo(Siswa::class, 'siswa_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function tahunAjaran()
    {
        return $this->belongsTo(TahunAjaran::class, 'tahun_ajaran_id');
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class, 'semester_id');
    }

       public function getGenderTextAttribute()
    {
        return $this->gender === 'L' ? 'Laki-laki' : 'Perempuan';
    }
}
