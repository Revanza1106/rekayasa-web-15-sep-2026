<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        $mahasiswa = [
            'nama' => 'TEST nama',
            'nim' => '221011400000',
            'jurusan' => 'Teknik Informatika',
            'email' => 'kelastest@gmail.com',
        ];

        return view('Mahasiswa', compact('mahasiswa'));
    }
}