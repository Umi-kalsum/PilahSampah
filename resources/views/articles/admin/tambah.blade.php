@extends('layouts.admin')

@section('content')
    <h1>Tambah Artikel</h1>
    <form action="{{ route('artikel.simpan') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="judul">Judul</label>
            <input type="text" id="judul" name="judul" required>
        </div>
        <div>
            <label for="deskripsi">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" required></textarea>
        </div>
        <div>
            <label for="konten">Konten</label>
            <textarea id="konten" name="konten" required></textarea>
        </div>
        <div>
            <label for="gambar">Gambar</label>
            <input type="file" id="gambar" name="gambar" accept="image/*" required>
        </div>
        <button type="submit">Simpan</button>
    </form>
@endsection
