<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UjianItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [

            // Tahsinul Kitabah
            ['ujian_id' => '9', 'kategori' => 'Kitabah', 'nama_item' => 'Tahsinul Kitabah'],

            // Adab
            ['ujian_id' => '1', 'kategori' => 'Adab', 'nama_item' => 'Adab'],

            // ============================
            // HADIS (4)
            // ============================
            ['ujian_id' => '7', 'kategori' => 'Hadis', 'nama_item' => 'Hadis memuliakan tamu'],
            ['ujian_id' => '7', 'kategori' => 'Hadis', 'nama_item' => 'Hadis jangan berburuk sangka'],
            ['ujian_id' => '7', 'kategori' => 'Hadis', 'nama_item' => 'Hadis rukun islam'],
            ['ujian_id' => '7', 'kategori' => 'Hadis', 'nama_item' => 'Hadis rukun iman'],

            // ============================
            // DOA (4)
            // ============================
            ['ujian_id' => '6', 'kategori' => 'Doa', 'nama_item' => 'Doa ketika ada petir'],
            ['ujian_id' => '6', 'kategori' => 'Doa', 'nama_item' => 'Doa pembuka acara'],
            ['ujian_id' => '6', 'kategori' => 'Doa', 'nama_item' => 'Doa menjadi anak soleh'],
            ['ujian_id' => '6', 'kategori' => 'Doa', 'nama_item' => 'Doa mendengar berita duka'],

            // ============================
            // SURAH JUZ 28
            // ============================
            ['ujian_id' => '8', 'kategori' => 'Surah 28', 'nama_item' => 'Al-Mujadilah'],
            ['ujian_id' => '8', 'kategori' => 'Surah 28', 'nama_item' => 'Al-Hasyr'],
            ['ujian_id' => '8', 'kategori' => 'Surah 28', 'nama_item' => 'Al-Mumtahanah'],
            ['ujian_id' => '8', 'kategori' => 'Surah 28', 'nama_item' => 'As-Saff'],
            ['ujian_id' => '8', 'kategori' => 'Surah 28', 'nama_item' => 'Al-Jumu’ah'],
            ['ujian_id' => '8', 'kategori' => 'Surah 28', 'nama_item' => 'Al-Munafiqun'],
            ['ujian_id' => '8', 'kategori' => 'Surah 28', 'nama_item' => 'At-Taghabun'],
            ['ujian_id' => '8', 'kategori' => 'Surah 28', 'nama_item' => 'At-Talaq'],
            ['ujian_id' => '8', 'kategori' => 'Surah 28', 'nama_item' => 'At-Tahrim'],

            // ============================
            // SURAH JUZ 29
            // ============================
            ['ujian_id' => '8', 'kategori' => 'Surah 29', 'nama_item' => 'Al-Mulk'],
            ['ujian_id' => '8', 'kategori' => 'Surah 29', 'nama_item' => 'Al-Qalam'],
            ['ujian_id' => '8', 'kategori' => 'Surah 29', 'nama_item' => 'Al-Haqqah'],
            ['ujian_id' => '8', 'kategori' => 'Surah 29', 'nama_item' => 'Al-Ma’arij'],
            ['ujian_id' => '8', 'kategori' => 'Surah 29', 'nama_item' => 'Nuh'],
            ['ujian_id' => '8', 'kategori' => 'Surah 29', 'nama_item' => 'Al-Jinn'],
            ['ujian_id' => '8', 'kategori' => 'Surah 29', 'nama_item' => 'Al-Muzzammil'],
            ['ujian_id' => '8', 'kategori' => 'Surah 29', 'nama_item' => 'Al-Muddassir'],
            ['ujian_id' => '8', 'kategori' => 'Surah 29', 'nama_item' => 'Al-Qiyamah'],
            ['ujian_id' => '8', 'kategori' => 'Surah 29', 'nama_item' => 'Al-Insan'],
            ['ujian_id' => '8', 'kategori' => 'Surah 29', 'nama_item' => 'Al-Mursalat'],

            // ============================
            // SURAH JUZ 30
            // ============================
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'An-Naba'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'An-Nazi’at'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Abasa'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'At-Takwir'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-Infitar'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-Mutaffifin'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-Insyiqaq'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-Buruj'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'At-Tariq'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-A’la'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-Ghashiyah'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-Fajr'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-Balad'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Asy-Syams'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-Layl'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Adh-Dhuha'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Asy-Syarh'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'At-Tin'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-Alaq'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-Qadr'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-Bayyinah'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Az-Zalzalah'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-‘Adiyat'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-Qari’ah'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'At-Takatsur'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-‘Asr'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-Humazah'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-Fil'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Quraisy'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-Ma’un'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-Kausar'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-Kafirun'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'An-Nasr'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-Lahab'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-Ikhlas'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'Al-Falaq'],
            ['ujian_id' => '8', 'kategori' => 'Surah 30', 'nama_item' => 'An-Nas'],

            // ============================
            // PRAKTEK SHOLAT (83)
            // ============================
            ['ujian_id' => '4', 'kategori' => 'Bacaan sholat', 'nama_item' => 'Bacaan sholat'],
            ['ujian_id' => '4', 'kategori' => 'Praktek sholat', 'nama_item' => 'Praktek sholat'],
            /* ['ujian_id' => '4', 'kategori' => 'Praktek sholat', 'nama_item' => 'Niat Shalat'],
            ['ujian_id' => '4', 'kategori' => 'Praktek sholat', 'nama_item' => 'Takbiratul Ihram'],
            ['ujian_id' => '4', 'kategori' => 'Praktek sholat', 'nama_item' => 'Bacaan Iftitah'],
            ['ujian_id' => '4', 'kategori' => 'Praktek sholat', 'nama_item' => 'Surah Al-Fatihah'],
            ['ujian_id' => '4', 'kategori' => 'Praktek sholat', 'nama_item' => 'Surah Pendek'],
            ['ujian_id' => '4', 'kategori' => 'Praktek sholat', 'nama_item' => 'Rukuk'],
            ['ujian_id' => '4', 'kategori' => 'Praktek sholat', 'nama_item' => 'I’tidal'],
            ['ujian_id' => '4', 'kategori' => 'Praktek sholat', 'nama_item' => 'Sujud'],
            ['ujian_id' => '4', 'kategori' => 'Praktek sholat', 'nama_item' => 'Duduk di antara dua sujud'],
            ['ujian_id' => '4', 'kategori' => 'Praktek sholat', 'nama_item' => 'Tasyahud'],
            ['ujian_id' => '4', 'kategori' => 'Praktek sholat', 'nama_item' => 'Sholawat'],
            ['ujian_id' => '4', 'kategori' => 'Praktek sholat', 'nama_item' => 'Doa setelah tasyahud'],
            ['ujian_id' => '4', 'kategori' => 'Praktek sholat', 'nama_item' => 'Salam'], */            

            // ============================
            // PRAKTEK WUDHU (80)
            // ============================
            ['ujian_id' => '5', 'kategori' => 'Praktek Wudhu', 'nama_item' => 'Niat'],
            ['ujian_id' => '5', 'kategori' => 'Praktek Wudhu', 'nama_item' => 'Membasuh tangan'],
            ['ujian_id' => '5', 'kategori' => 'Praktek Wudhu', 'nama_item' => 'Berkumur'],
            ['ujian_id' => '5', 'kategori' => 'Praktek Wudhu', 'nama_item' => 'Mencuci hidung'],
            ['ujian_id' => '5', 'kategori' => 'Praktek Wudhu', 'nama_item' => 'Mencuci wajah'],
            ['ujian_id' => '5', 'kategori' => 'Praktek Wudhu', 'nama_item' => 'Mecuci lengan'],
            ['ujian_id' => '5', 'kategori' => 'Praktek Wudhu', 'nama_item' => 'Mengusap kepala'],
            ['ujian_id' => '5', 'kategori' => 'Praktek Wudhu', 'nama_item' => 'Mengusap Telinga'],
            ['ujian_id' => '5', 'kategori' => 'Praktek Wudhu', 'nama_item' => 'Mencuci Kaki'],
            ['ujian_id' => '5', 'kategori' => 'Praktek Wudhu', 'nama_item' => 'Berurutan'],

            ['ujian_id' => '10', 'kategori' => 'Prakarya', 'nama_item' => 'Membuat Prakarya'],            
        ];

        DB::table('ujian_item')->insert($items);
    }
}
