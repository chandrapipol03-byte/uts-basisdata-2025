<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{public function run(): void
    {
        DB::table('pasiens')->insert([
            [
                'no_rm' => 'RM0001',
                'nik' => '3174051234560001',
                'nama' => 'Budiman',
                'jenis_kelamin' => 'L',
                'tanggal_lahir' => '1995-05-12',
                'alamat' => 'Jl. Abdul Hamid No.10',
                'kota' => 'Jakarta',
                'provinsi' => 'DKI Jakarta',
                'no_hp' => '08123456789',
                'golongan_darah' => 'O',
                'status_pernikahan' => 'Belum Kawin',
                'pekerjaan' => 'Pegawai',
            ],
            [
                'no_rm' => 'RM0002',
                'nik' => '3174051234560002',
                'nama' => 'Anisa',
                'jenis_kelamin' => 'P',
                'tanggal_lahir' => '1998-02-20',
                'alamat' => 'Jl. Roxy Raya No.21',
                'kota' => 'Jakarta',
                'provinsi' => 'DKI Jakarta',
                'no_hp' => '08129876543',
                'golongan_darah' => 'A',
                'status_pernikahan' => 'Kawin',
                'pekerjaan' => 'Dokter',
            ],
        ]);
    }
}
