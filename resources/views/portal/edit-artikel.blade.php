@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Artikel</h1>
    <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ $artikel->judul }}" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" required>{{ $artikel->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label for="konten">Konten</label>
            <textarea name="konten" id="konten" rows="5" class="form-control" required>{{ $artikel->konten }}</textarea>
        </div>
        <div class="mb-3">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
            <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('artikel.daftar') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
