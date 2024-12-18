@extends('layouts.portal')

@section('title', 'Manajemen Artikel - Admin')

@section('content')
    <h1>Manajemen Artikel</h1>
    <a href="{{ route('artikel.create') }}" class="btn">Tambah Artikel</a>
    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artikels as $artikel)
                <tr>
                    <td>{{ $artikel->judul }}</td>
                    <td>{{ $artikel->deskripsi }}</td>
                    <td>
                        <a href="{{ route('artikel.edit', $artikel->id) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('artikel.destroy', $artikel->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
