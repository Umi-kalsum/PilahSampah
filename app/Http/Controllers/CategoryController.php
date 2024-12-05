<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    // Halaman utama kategori
    public function index()
    {
        // Ambil data kategori dari database
        $kategori = DB::table('kategori')->get(); // Ambil semua kategori

        return view('kategori.index', compact('kategori')); // Kirim data ke view
    }

    // Halaman detail item berdasarkan kategori
    public function show($kategori_id)
    {
        // Ambil data kategori dan item yang sesuai
        $kategori = DB::table('kategori')->where('id', $kategori_id)->first();
        $items = DB::table('item')->where('kategori_id', $kategori_id)->get();

        return view('kategori.show', compact('kategori', 'items')); // Kirim data ke view detail
    }
}
