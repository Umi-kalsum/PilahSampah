@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Jenis Sampah</h1>
        <div class="row">
            @foreach ($jenis_sampah as $kategori => $data)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset($data['image']) }}" class="card-img-top" alt="{{ $kategori }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $kategori }}</h5>
                            <ul>
                                @foreach ($data['items'] as $item)
                                    <li>
                                        <a href="{{ route('sampah.detail', ['item' => $item['name']]) }}">
                                            {{ $item['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
