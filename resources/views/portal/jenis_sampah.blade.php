@extends('layouts.app')

@section('content')
<header>
    <h1>Jenis Sampah yang Bisa di Pilah</h1>
</header>
<section class="categories">
    @foreach ($jenisSampah as $jenis => $data)
        <div class="category">
            <img src="{{ asset($data['image']) }}" alt="{{ ucfirst($jenis) }}">
            <p>{{ ucfirst($jenis) }}</p>
            <a href="{{ route('jenis-sampah.detail', $jenis) }}" class="btn">Lihat Detail</a>
        </div>
    @endforeach
</section>
@endsection
