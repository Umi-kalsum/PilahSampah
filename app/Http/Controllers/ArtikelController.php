<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Article; // Pastikan model Article sudah ada
use App\Http\Middleware\AdminMiddleware;

class ArtikelController extends Controller
{
    public function __construct()
    {
        // Middleware hanya diterapkan pada metode CRUD untuk admin
        $this->middleware('admin')->only(['tambahArtikel', 'simpanArtikel', 'editArtikel', 'updateArtikel', 'hapusArtikel']);
    }

    // Menampilkan daftar artikel
    public function daftarArtikel()
    {
        // Mengambil semua artikel dari database
        $artikels = Article::all(); 
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
