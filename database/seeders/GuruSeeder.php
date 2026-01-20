<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin + Guru ATT

        $firman = User::firstOrCreate(
            ['email' => 'firman@eraport.test'],
            [
                'name'      => 'Firman Wahyudi',
                'password'  => Hash::make('password'),
            ]
            );

        $firman->assignRole(['admin', 'guru_att']);

        /* Guru::firstOrCreate(
            ['user_id' => $firman->id],
            [
                'nama_lengkap'  => 'Firman Wahyudi',
                'jenis_kelamin' => 'L'
            ]
        );

        // wali kelas

        $dina = User::firstOrCreate(
            ['email => dina@eraport.test'],
            [
                'name'      => 'Dina',
                'password'  => Hash::make('password'),
            ]
            );

        $dina->assignRole(['walikelas']);

        Guru::firstOrCreate(
            ['user_id' => $dina->id],
            [
                'nama_lengkap'  => 'Dina',
                'jenis_kelamin' => 'P'
            ]
        ); */
    }
}
