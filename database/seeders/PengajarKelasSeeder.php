<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\PengajarKelas;
use App\Models\Semester;
use App\Models\TahunAjaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengajarKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guru = Guru::where('nama_lengkap', 'Firman_wahyudi')->first();
        $kelas = Kelas::where('nama_kelas', 'Bahrain')->first();
        $tahunAjaran = TahunAjaran::where('is_active', true)->first();
        $semester = Semester::where('is_active', true)->first();

        if (!$guru || !$kelas || !$tahunAjaran || !$semester) {
            return;
        }

        $mapelATT = Mapel::where('nama_mapel', 'ATT')->first();

        PengajarKelas::firstOrCreate(
            [
                'guru_id'         => $guru->id,
                'kelas_id'        => $kelas->id,
                'mapel_id'        => $mapelATT->id,
                'tahun_ajaran_id' => $tahunAjaran->id,
                'semester_id'     => $semester->id,
            ]
        );
    }
}
