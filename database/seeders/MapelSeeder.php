<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mapel = [
            [
                'nama_mapel' => 'ATT',
                'kategori'   => 'bidang',
                'deskripsi'  => 'Penilaian bacaan dan praktik ibadah (sholat, wudhu, doa, hadis)
                                 Penilaian bacaan Iqra, Tahsin, dan Al-Qur’an
                                 Penilaian hafalan Al-Qur’an (Juz 30, 29, 28)',
            ],
            [
                'nama_mapel' => 'Seni Theater',
                'kategori'   => 'bidang',
                'deskripsi'  => 'Belajar seni teater'
            ]
        ];

        foreach ($mapel as $item){
            Mapel::firstOrCreate(          // firstOrCreate → aman kalau seeder dijalankan ulang
                ['nama_mapel' => $item['nama_mapel']],
                $item
            );
        }
    }
}
