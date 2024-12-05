<?php

namespace App\Http\Controllers;

use App\Models\JenisSampah;
use Illuminate\Http\Request;

class JenisSampahController extends Controller
{
    public function index()
    {
        $categories = JenisSampah::all();
        return view('portal.jenis_sampah', compact('categories')); // Path diperbarui
    }
}