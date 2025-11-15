<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RumahSakitSeeder extends Seeder {
public function run(): void
{
    DB::table('rumah_sakits')->insert([
        [
            'kode_rs' => 'RS001',
            'nama' => 'RS Chandra Wijaya',
            'tipe_rs' => 'B',
            'alamat' => 'Jl. Wijaya Kusuma. 90',
            'kota' => 'Jakarta',
            'provinsi' => 'DKI Jakarta',
            'telepon' => '088210272990',
            'email' => 'info@rssehat.com',
            'website' => 'https://rschandrawijaya.com',
            'created_at' => now(),
        ],
    ]);
}
}
