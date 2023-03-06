<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga')->insert([
            [
                'nama' => 'Misno',
                'peran' => 'ayah',
                'jk' => 'L'
            ],
            [
                'nama' => 'Asih',
                'peran' => 'ibu',
                'jk' => 'P'
            ],
            [
                'nama' => 'Ninis',
                'peran' => 'kakak',
                'jk' => 'P'
            ]
        ]);
    }
}
