<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kendaraan')->insert([
            [
                'no_pol'=>'M 1 FU',
                'merk' => 'honda',
                'jenis' => 'supra',
                'tahun_buat' => '2009',
                'warna' => 'hitam'
            ],
            [
                'no_pol'=>'AG 123 RA',
                'merk' => 'yamaha',
                'jenis' => 'mio',
                'tahun_buat' => '2009',
                'warna' => 'merah'
            ] 
            ]);
    }
}
