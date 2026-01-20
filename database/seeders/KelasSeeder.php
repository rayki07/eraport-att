<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\TahunAjaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $walikelas = Guru::where('nama_lengkap', 'Dina')->first();
        $tahunAjaranAktif = TahunAjaran::where('is_active', true)->first();
        $tahunAjaran = TahunAjaran::all();

        if (!$walikelas || !$tahunAjaranAktif) {
            return;
        }

        /* Kelas::firstOrCreate(
            [
                'nama_kelas'    => 'Bahrain',
            ],
            [
                'rombel'        => 1,
                'walikelas_id'   => $walikelas->id,
                'is_active'       => true,
            ]
        ); */

        foreach ($tahunAjaran as $tahun){
            Kelas::create([
                'rombel'        => $tahun->id,
                'nama_kelas'    => 'Bahrain',
                'walikelas_id'  => $walikelas->id,
                'is_active'     => $tahun->is_active,
            ]);
        }
    }
}
