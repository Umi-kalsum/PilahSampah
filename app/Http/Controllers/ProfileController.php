<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    // Menampilkan profil pengguna
    public function show()
    {
        // Mendapatkan data pengguna yang sedang login
        $user = Auth::user();
        
        // Mengirim data pengguna ke view portal.show
        return view('portal.show', compact('user'));
    }

    // Fungsi untuk memperbarui foto profil
    public function updateProfilePhoto(Request $request)
    {
        // Validasi foto profil
        $request->validate([
            'profile_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Memastikan hanya gambar yang diupload
        ]);

        // Memeriksa apakah file foto profil ada
        if ($request->hasFile('profile_photo')) {
            // Menghapus foto lama jika ada
            if (Auth::user()->profile_photo_path) {
                Storage::delete(Auth::user()->profile_photo_path); // Menghapus foto yang lama dari storage
            }

            // Mengunggah foto profil baru ke folder 'profile_photos' di storage
            $path = $request->file('profile_photo')->store('profile_photos', 'public');

            // Menyimpan path foto profil baru di database
           # Auth::user()->update(['profile_photo_path' => $path]);
        }

        // Setelah foto berhasil diperbarui, kembali ke halaman portal pengguna
        return redirect()->route('portal.show');
    }
}
