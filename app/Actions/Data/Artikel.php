<?php

namespace App\Data;

class Artikel
{
    public static function getDaftarArtikel()
    {
        return [
            [
                'id' => 1,
                'judul' => 'Cara Mengelola Sampah Organik',
                'deskripsi' => 'Pelajari bagaimana mengelola sampah organik untuk lingkungan yang lebih bersih dan sehat.',
                'gambar' => 'organik.jpg',
            ],
            [
                'id' => 2,
                'judul' => 'Pentingnya Memisahkan Sampah',
                'deskripsi' => 'Mengapa penting untuk memisahkan jenis sampah sejak dini? Simak penjelasannya di sini.',
                'gambar' => 'pisah-sampah.jpg',
            ],
            [
                'id' => 3,
                'judul' => 'Inovasi dalam Daur Ulang Plastik',
                'deskripsi' => 'Inovasi terbaru dalam daur ulang plastik dan logam untuk membantu mengurangi limbah.',
                'gambar' => 'daur-ulang.jpg',
            ],
            [
                'id' => 4,
                'judul' => 'Daur Ulang Kertas Menjadi Seni',
                'deskripsi' => 'Daur ulang kertas menjadi karya seni: inspirasi untuk memanfaatkan kembali sampah.',
                'gambar' => 'seni-kertas.jpg',
            ],
        ];
    }

    public static function getDetailArtikel()
    {
        return [
            1 => [
                'judul' => 'Cara Mengelola Sampah Organik',
                'gambar' => 'organik.jpg',
                'konten' => 'Sampah organik seperti sisa makanan dapat diolah menjadi kompos yang berguna untuk pertanian.',
            ],
            2 => [
                'judul' => 'Pentingnya Memisahkan Sampah',
                'gambar' => 'pisah-sampah.jpg',
                'konten' => 'Memisahkan sampah sejak awal membantu proses daur ulang dan pengolahan limbah menjadi lebih efisien.',
            ],
            3 => [
                'judul' => 'Inovasi dalam Daur Ulang Plastik',
                'gambar' => 'daur-ulang.jpg',
                'konten' => 'Berbagai inovasi telah dikembangkan untuk mendaur ulang plastik, seperti menciptakan bahan bangunan dari plastik bekas.',
            ],
            4 => [
                'judul' => 'Daur Ulang Kertas Menjadi Seni',
                'gambar' => 'seni-kertas.jpg',
                'konten' => 'Kertas bekas dapat diolah kembali menjadi karya seni unik yang bernilai ekonomi.',
            ],
        ];
    }
}
