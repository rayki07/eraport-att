<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [

            // 5 Bahrain
            ['nis' => '21221003', 'nisn' => '3143732666', 'nama_lengkap' => 'ADIBA SHAKIRA ATMARINI', 'nama_panggilan' => 'Adiba', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221005', 'nisn' => '0154828546', 'nama_lengkap' => 'AFIQAH ZAHRA SALSABILA', 'nama_panggilan' => 'Afiqah', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221010', 'nisn' => '3144562762', 'nama_lengkap' => 'ANINDITA MAHARANI SUTIAWAN', 'nama_panggilan' => 'Anin', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221011', 'nisn' => '3149856800', 'nama_lengkap' => 'ARRA EKA OCTAVIANI', 'nama_panggilan' => 'Arra', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221014', 'nisn' => '3142873321', 'nama_lengkap' => 'AXELIA ARSHYFA RAYNELLE GIFARA', 'nama_panggilan' => 'Axelia', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221019', 'nisn' => '3149659629', 'nama_lengkap' => 'FARRAS AFIYAH NAILA ILHAM', 'nama_panggilan' => 'Farras', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221020', 'nisn' => '3140549834', 'nama_lengkap' => 'FITRI SALASATUN', 'nama_panggilan' => 'Fitri', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221021', 'nisn' => '3149263783', 'nama_lengkap' => 'HADIBAH SALSABILA SIREGAR', 'nama_panggilan' => 'Hadibah', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221028', 'nisn' => '3150493276', 'nama_lengkap' => 'KIANDRA AQILA ZAHRA', 'nama_panggilan' => 'Kiandra', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221029', 'nisn' => '3154050691', 'nama_lengkap' => 'MAFAZA ALEISHA FAIRUZZAKI', 'nama_panggilan' => 'Mafaza', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221030', 'nisn' => '0144330161', 'nama_lengkap' => 'MIKAYLA JASMIN FADLYSAH', 'nama_panggilan' => 'Mikayla', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221038', 'nisn' => '3152380188', 'nama_lengkap' => 'NADHIFA AZZAHRA FITRIA', 'nama_panggilan' => 'Nadhifa', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221039', 'nisn' => '3158720394', 'nama_lengkap' => 'NAJWA KHAIRA BILQIS', 'nama_panggilan' => 'Najwa', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221040', 'nisn' => '3143568361', 'nama_lengkap' => 'NAYLA ZUMIA SYAFAKILLAH', 'nama_panggilan' => 'Nayla', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221041', 'nisn' => '3146771448', 'nama_lengkap' => 'QORINA ADZRA KAMILA', 'nama_panggilan' => 'Qorina', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221043', 'nisn' => '3141507428', 'nama_lengkap' => 'RAIHANA AMIRAH KALTSUM INDIRA', 'nama_panggilan' => 'Hana', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221044', 'nisn' => '3150065402', 'nama_lengkap' => 'RHORO AYU CAHAYA KHUMAIRA', 'nama_panggilan' => 'Rhoro', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221046', 'nisn' => '3148729750', 'nama_lengkap' => 'SALSABILA NADHIFA KRISTANTO', 'nama_panggilan' => 'Salsa', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221047', 'nisn' => '3147691401', 'nama_lengkap' => 'SHAFFIYAH FATHIMAH AZ ZAHRA', 'nama_panggilan' => 'Fathimah', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '2425.4.061', 'nisn' => '0155727179', 'nama_lengkap' => 'SHAFIRA AYUNDA', 'nama_panggilan' => 'Fira', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221048', 'nisn' => '0145690921', 'nama_lengkap' => 'SHIDQIA IZZA AZZAHRA', 'nama_panggilan' => 'Qia', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '22232059', 'nisn' => '3147803154', 'nama_lengkap' => 'SITI AIDILA HASIDIN', 'nama_panggilan' => 'Dila', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221049', 'nisn' => '3149042318', 'nama_lengkap' => 'SYALWA FITRI IZZATUNNISA', 'nama_panggilan' => 'Syalwa', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221050', 'nisn' => '3152997735', 'nama_lengkap' => 'TIFANY CAHYA QUEEN FORIYANI', 'nama_panggilan' => 'Zakiya', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221053', 'nisn' => '3144184911', 'nama_lengkap' => 'ZAKIYA AZAHRA RAMADHANI', 'nama_panggilan' => 'Zakiya', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '22231060', 'nisn' => '3152583699', 'nama_lengkap' => "ZARQA SAMA'IR RAHMAH", 'nama_panggilan' => 'Rahma', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
            ['nis' => '21221054', 'nisn' => '3154754223', 'nama_lengkap' => 'ZUKHRUFA SYAHBI KHAIRANI', 'nama_panggilan' => 'Ufa', 'jenis_kelamin' => 'P', 'status' => 'aktif'],
        ];
        DB::table('siswa')->insert($items);
    }
}
