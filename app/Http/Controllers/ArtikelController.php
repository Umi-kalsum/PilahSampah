<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    // Menampilkan daftar artikel
    public function daftarArtikel()
    {
        $artikels = [
            [
                'id' => 1,
                'judul' => 'Mengurangi Sampah Plastik',
                'deskripsi' => 'Tahukah Anda bahwa plastik membutuhkan lebih dari 100 tahun untuk terurai?',
                'konten' => 'Artikel ini membahas langkah-langkah untuk mengurangi sampah plastik...',
                'gambar' => 'artikel1.jpg',
            ],
            [
                'id' => 2,
                'judul' => 'Cara Efektif Mengelola Sampah',
                'deskripsi' => 'Pengelolaan sampah yang baik dapat membantu menjaga lingkungan kita...',
                'konten' => 'Mengelola sampah dengan cara yang efektif sangat penting...',
                'gambar' => 'artikel2.jpg',
            ],
        ];

        return view('portal.daftar-artikel', compact('artikels'));
    }

    // Menampilkan detail artikel berdasarkan ID
    public function detailArtikel($id)
    {
        $artikels = [
            [
                'id' => 1,
                'judul' => 'Mengurangi Sampah Plastik',
                'deskripsi' => 'Tahukah Anda bahwa plastik membutuhkan lebih dari 100 tahun untuk terurai?',
                'konten' => 'Artikel ini membahas langkah-langkah untuk mengurangi sampah plastik...',
                'gambar' => 'artikel1.jpg',
            ],
            [
                'id' => 2,
                'judul' => 'Cara Efektif Mengelola Sampah',
                'deskripsi' => 'Pengelolaan sampah yang baik dapat membantu menjaga lingkungan kita...',
                'konten' => 'Mengelola sampah dengan cara yang efektif sangat penting...',
                'gambar' => 'artikel2.jpg',
            ],
        ];

        $artikel = collect($artikels)->firstWhere('id', $id);

        if (!$artikel) {
            abort(404, 'Artikel tidak ditemukan');
        }

        return view('portal.detail-artikel', compact('artikel'));
    }
}
