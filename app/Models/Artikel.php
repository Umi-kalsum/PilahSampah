<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artikel;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'konten',
        'gambar', // Tambahkan gambar
    ];
}
