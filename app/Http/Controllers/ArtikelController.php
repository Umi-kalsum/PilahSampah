<?php

namespace App\Http\Controllers;

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

>>>>>>> 00bb400 (memperbarui lp)
