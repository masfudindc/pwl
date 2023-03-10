<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkul')->insert([
            [
                'namaMatkul' => 'Pemro Berbasis Objek',
                'kode' => 'PBO',
                'hari' => 'Senin',
                'dosen' => 'ENH',
                'semester' => '3'
            ],
            [
                'namaMatkul' => 'Pemrograman Web',
                'kode' => 'PW',
                'hari' => 'Rabu',
                'dosen' => 'DWW',
                'semester' => '3'
            ],
            [
                'namaMatkul' => 'Basis Data Lanjut',
                'kode' => 'BDL',
                'hari' => 'Kamis',
                'dosen' => 'ELA',
                'semester' => '3'
            ],
            [
                'namaMatkul' => 'Pemro Web Lanjut',
                'kode' => 'PWL',
                'hari' => 'Senin',
                'dosen' => 'MZA',
                'semester' => '4'
            ],
            [
                'namaMatkul' => 'Jaringan Komputer',
                'kode' => 'JK',
                'hari' => 'Rabu',
                'dosen' => 'KSB',
                'semester' => '4'
            ],
            [
                'namaMatkul' => 'Praktikum Jarkom',
                'kode' => 'PJK',
                'hari' => 'Jumat',
                'dosen' => 'KSB',
                'semester' => '4'
            ]
        ]);
    }
}
