<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi')->insert([
            [
                'nama_hobi' => 'futsal',
                'alasan' => 'suka dengan olahraga yang berhubungan dengan bola'
            ],
            [
                'nama_hobi' => 'game mobile',
                'alasan' => 'suka dengan e-sport'
            ] 
            ]);
    }
}
