@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Artikel</h1>
    <form action="{{ route('artikel.simpan') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="konten">Konten</label>
            <textarea name="konten" id="konten" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('artikel.daftar') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
