<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampahController extends Controller
{
    public function index()
    {
        // Sample data
        $sampahs = [
            ['id' => 1, 'nama' => 'Plastik', 'jenis' => 'Anorganik', 'harga' => 2000],
            ['id' => 2, 'nama' => 'Kertas', 'jenis' => 'Anorganik', 'harga' => 1500],
            ['id' => 3, 'nama' => 'Sisa Makanan', 'jenis' => 'Organik', 'harga' => 1000],
        ];

        return view('portal.kelola-sampah', compact('sampahs'));
    }
}
