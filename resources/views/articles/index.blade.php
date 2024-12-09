@extends('layouts.app')

@section('content')
<h1>Daftar Artikel</h1>
<a href="{{ route('articles.create') }}" class="btn btn-primary">Tambah Artikel</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Dibuat Oleh</th>
            <th>Tampil</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $key => $article)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $article->judul }}</td>
            <td>{{ $article->dibuat_oleh }}</td>
            <td>{{ $article->tampil ? 'Ya' : 'Tidak' }}</td>
            <td>
                <a href="{{ route('articles.show', $article->id) }}">Lihat</a>
                <a href="{{ route('articles.edit', $article->id) }}">Edit</a>
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Hapus artikel ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
