<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $mahasiswa = [
            'nama' => 'Topas Akbar',
            'nim' => '102022330315',
            'jurusan' => 'S1 Sistem Informasi',
            'email' => 'topasb@student.telkomuniversity.ac.id',
            'fakultas' => 'Fakultas Rekayasa Industri',
            'foto' => 'topas.png'
        ];
        return view('profil', ['mahasiswa' => $mahasiswa]);
    }
}
