<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UjianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['nama_ujian' => 'Adab', 'mapel_id' => '1'],
            ['nama_ujian' => 'Tahsin', 'mapel_id' => '1'],
            ['nama_ujian' => 'Bacaan Sholat', 'mapel_id' => '1'],
            ['nama_ujian' => 'Praktek Sholat', 'mapel_id' => '1'],
            ['nama_ujian' => 'Praktek Wudhu', 'mapel_id'=> '1'],
            ['nama_ujian' => 'Doa', 'mapel_id' => '1'],
            ['nama_ujian' => 'Hadis', 'mapel_id' => '1'],
            ['nama_ujian' => 'Tahfidz', 'mapel_id' => '1'],
            ['nama_ujian' => 'Tahsinul Kitabah', 'mapel_id' => '1'],
            ['nama_ujian' => 'Kesenian', 'mapel_id' => '2'],
        ];

        DB::table('ujian')->insert($items);
    }
}
