<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Article; // Pastikan model Article sudah ada
use App\Http\Middleware\AdminMiddleware;

class ArtikelController extends Controller
{

    // Menampilkan daftar artikel
    public function daftarArtikel()
    {
        // Mengambil semua artikel dari database
        $artikels = Artikels::all(); 
        return view('portal.daftar-artikel', compact('artikels'));
    }

    // Menampilkan detail artikel berdasarkan ID
    public function detailArtikel($id)
    {
        // Mencari artikel berdasarkan ID
        $artikel = Article::findOrFail($id); 
        return view('portal.detail-artikel', compact('artikel'));
    }

    // Menambahkan artikel baru
    public function tambahArtikel()
    {
        return view('portal.tambah-artikel');
    }

    public function simpanArtikel(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'konten' => 'required|string',
            'gambar' => 'nullable|image|max:2048', // Validasi gambar
        ]);

        // Penyimpanan gambar jika ada
        $gambarPath = $request->hasFile('gambar') ? $request->file('gambar')->store('artikels', 'public') : 'default.jpg';

        // Menyimpan artikel ke dalam database
        Article::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'konten' => $request->konten,
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('artikel.daftar')->with('success', 'Artikel berhasil ditambahkan!');
    }

    // Menampilkan halaman edit artikel
    public function editArtikel($id)
    {
        $artikel = Article::findOrFail($id); // Menemukan artikel berdasarkan ID
        return view('portal.edit-artikel', compact('artikel'));
    }

    // Mengupdate artikel
    public function updateArtikel(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'konten' => 'required|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        // Menemukan artikel berdasarkan ID
        $artikel = Article::findOrFail($id);

        // Update artikel
        $artikel->judul = $request->judul;
        $artikel->deskripsi = $request->deskripsi;
        $artikel->konten = $request->konten;

        // Cek apakah ada gambar yang diupload
        if ($request->hasFile('gambar')) {
            $artikel->gambar = $request->file('gambar')->store('artikels', 'public');
        }

        // Simpan perubahan
        $artikel->save();

        return redirect()->route('artikel.daftar')->with('success', 'Artikel berhasil diperbarui!');
    }

    // Menghapus artikel
    public function hapusArtikel($id)
    {
        $artikel = Article::findOrFail($id); // Menemukan artikel berdasarkan ID
        $artikel->delete(); // Menghapus artikel

        return redirect()->route('artikel.daftar')->with('success', 'Artikel berhasil dihapus!');
    }
}
=======
use Illuminate\Http\Request;
=======
use Illuminate\Support\Facades\Storage;
>>>>>>> df0d3fe (menambahkan view portal login& register)

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
<<<<<<< HEAD

>>>>>>> 00bb400 (memperbarui lp)
=======
>>>>>>> df0d3fe (menambahkan view portal login& register)
