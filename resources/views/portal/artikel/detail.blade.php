@extends('layouts.portal')

@section('content')
    <h1>{{ $artikel->judul }}</h1>
    <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" class="article-image">
    <p>{{ $artikel->konten }}</p>
    <a href="{{ route('artikel.daftar') }}" class="btn-back">Kembali ke Daftar Artikel</a>
@endsection
