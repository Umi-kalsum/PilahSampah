<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisSampahController extends Controller
{
    public function index()
    {
        // Data jenis sampah (contoh: dari database atau hard-coded)
        $jenisSampah = [
            ['nama' => 'Botol', 'gambar' => 'assets/icons/botol.png'],
            ['nama' => 'Kertas', 'gambar' => 'assets/icons/kertas.jpeg'],
            ['nama' => 'Organik', 'gambar' => 'assets/icons/organik.png'],
            ['nama' => 'Logam', 'gambar' => 'assets/icons/logam.jpeg'],
            ['nama' => 'Plastik', 'gambar' => 'assets/icons/plastik.jpeg'],
        ];

        // Return view dengan data
        return view('portal.jenis_sampah', compact('jenisSampah'));
    }
}
