<?php

namespace Database\Seeders;

use App\Models\Semester;
use App\Models\TahunAjaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TahunAjaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $startYear = 2019;
        $TotalYear = 6;

        for ($i = 0;
             $i < $TotalYear;
             $i++){
                $tahunMulai = $startYear +$i;
                $tahunSelesai = $tahunMulai + 1; 
            

                $isActive = ($i === $TotalYear - 1); // tahun terakhir aktif

                $tahunAjaran = TahunAjaran::create([
                    'tahun_mulai'       => $tahunMulai,
                    'tahun_selesai'     => $tahunSelesai,
                    'is_active'         => $isActive,
                ]);

                // Semester Ganjil
                Semester::create([
                    'tahun_ajaran_id'   => $tahunAjaran->id,
                    'nama_semester'     => 'ganjil',
                    'is_active'         => $isActive, // Ganjil aktif di tahun aktif
                ]);

                //semester Genap
                Semester::create([
                    'tahun_ajaran_id'   => $tahunAjaran->id,
                    'nama_semester'     => 'genap',
                    'is_active'         => false,
                ]);
            }
    }
}
