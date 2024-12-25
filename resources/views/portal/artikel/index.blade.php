@extends('layouts.portal')

@section('content')
    <h1>Daftar Artikel</h1>
    @foreach ($artikels as $artikel)
        <div>
            <h2>{{ $artikel->judul }}</h2>
            <p>{{ $artikel->deskripsi }}</p>
            <a href="{{ route('artikel.detail', $artikel->id) }}">Baca Selengkapnya</a>
        </div>
    @endforeach
@endsection
