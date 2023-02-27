<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // public function index()
    // {
    //     $data = [
    //         'nama' => 'Masfudin Dwi Cahyo',
    //         'nim' => '2141720010',
    //         'kelas' => 'TI-2B',
    //         'absen' => '13'
    //     ];
    //     return view('profile', $data);
    // }

    public function index(){
        return view ('layout.profile')
            ->with('nama', 'Masfudin Dwi Cahyo')
            ->with('nim', '2141720010')
            ->with('kelas', 'TI-2B')
            ->with('absen', '13');
    }
}
