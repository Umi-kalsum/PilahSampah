@extends('layouts.app')

@section('content')
<h1>Edit Artikel</h1>
<form action="{{ route('articles.update', $article->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Judul</label>
    <input type="text" name="judul" value="{{ $article->judul }}" required>
    <label>Isi</label>
    <textarea name="isi" required>{{ $article->isi }}</textarea>
    <label>Dibuat Oleh</label>
    <input type="text" name="dibuat_oleh" value="{{ $article->dibuat_oleh }}" required>
    <button type="submit">Simpan</button>
</form>
@endsection
