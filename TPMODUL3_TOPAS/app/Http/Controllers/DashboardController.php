<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Set timezone ke Asia/Jakarta
        date_default_timezone_set('Asia/Jakarta');

        // - Buat variabel nama, jam, tanggal
        $nama = 'Topas Akbar';
        $jam = date('H:i:s');
        $tanggal = $this->getTanggal();

        // - Tentukan $salam berdasarkan jam (pagi, siang, sore, malam)
        $hour = date('H');
        if ($hour >= 5 && $hour < 12) {
            $salam = 'Selamat Pagi';
        } elseif ($hour >= 12 && $hour < 15) {
            $salam = 'Selamat Siang';
        } elseif ($hour >= 15 && $hour < 18) {
            $salam = 'Selamat Sore';
        } else {
            $salam = 'Selamat Malam';
        }

        // - Kirim data ke view 'dashboard'
        return view('dashboard', [
            'salam' => $salam,
            'nama' => $nama,
            'jam' => $jam,
            'tanggal' => $tanggal
        ]);
    }

    private function getTanggal()
    {
        // ==================3==================
        // - Kembalikan tanggal sekarang dalam format dd-mm-yyyy
        return date('d-m-Y');
    }
}
