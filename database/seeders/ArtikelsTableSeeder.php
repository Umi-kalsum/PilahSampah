<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('artikels')->insert([
            [
                'judul' => 'Mengurangi Sampah Plastik',
                'deskripsi' => 'Tahukah Anda bahwa plastik membutuhkan lebih dari 100 tahun untuk terurai?',
                'konten' => 'Artikel ini membahas langkah-langkah untuk mengurangi sampah plastik...',
                'gambar' => 'artikel1.jpg',
            ],
            [
                'judul' => 'Cara Efektif Mengelola Sampah',
                'deskripsi' => 'Pengelolaan sampah yang baik dapat membantu menjaga lingkungan kita...',
                'konten' => 'Mengelola sampah dengan cara yang efektif sangat penting...',
                'gambar' => 'artikel2.jpg',
            ]
        ]);
    }
}
