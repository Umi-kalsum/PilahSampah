<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    private $artikels = [
        [
            'id' => 1,
            'judul' => 'Mengurangi Sampah Plastik: Langkah Sederhana',
            'gambar' => 'artikel1.jpg',
            'deskripsi' => 'Tahukah Anda bahwa plastik membutuhkan lebih dari 100 tahun untuk terurai?',
        ],
        [
            'id' => 2,
            'judul' => 'Manfaat Daur Ulang Sampah Organik',
            'gambar' => 'artikel2.jpg',
            'deskripsi' => 'Daur ulang sampah organik bisa menjadi solusi ramah lingkungan.',
        ],
        [
            'id' => 3,
            'judul' => 'Inovasi Teknologi dalam Pengelolaan Sampah',
            'gambar' => 'artikel3.jpg',
            'deskripsi' => 'Teknologi modern membantu pengelolaan sampah menjadi lebih efisien.',
        ],
        [
            'id' => 4,
            'judul' => 'Pentingnya Pemilahan Sampah Sejak Dini',
            'gambar' => 'artikel4.jpg',
            'deskripsi' => 'Pemilahan sampah sejak dini adalah kunci pengelolaan lingkungan.',
        ],
    ];

    public function index()
    {
        // Tampilkan daftar artikel
        return view('portal.daftar-artikel', ['artikels' => $this->artikels]);
    }

    public function show($id)
    {
        // Cari artikel berdasarkan ID
        $artikel = collect($this->artikels)->firstWhere('id', $id);

        // Jika artikel tidak ditemukan, tampilkan halaman 404
        if (!$artikel) {
            abort(404);
        }

        // Kirim artikel ke view detail-artikel
        return view('portal.detail-artikel', compact('artikel'));
    }
}

