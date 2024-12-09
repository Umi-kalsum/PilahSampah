@extends('layouts.app')

@section('content')
<h1>Tambah Artikel</h1>
<form action="{{ route('articles.store') }}" method="POST">
    @csrf
    <label>Judul</label>
    <input type="text" name="judul" required>
    <label>Isi</label>
    <textarea name="isi" required></textarea>
    <label>Dibuat Oleh</label>
    <input type="text" name="dibuat_oleh" required>
    <button type="submit">Simpan</button>
</form>
@endsection
