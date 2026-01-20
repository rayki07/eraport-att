<?php

namespace Database\Seeders;

use App\Models\Kelas;
use App\Models\KelasSiswa;
use App\Models\Semester;
use App\Models\Siswa;
use App\Models\TahunAjaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::all();
        $tahunAjaran = TahunAjaran::all();
        $siswa = Siswa::all();


        // memasukkan semua data kelas dan siswa

        foreach ($kelas as $daftarKelas) {
            foreach ($siswa as $murid){
                KelasSiswa::create([
                'siswa_id'          => $murid->id,
                'kelas_id'          => $daftarKelas->id,
                'tahun_ajaran_id'   => $daftarKelas->id,
                ]);    
            }   
        }
    }
}
