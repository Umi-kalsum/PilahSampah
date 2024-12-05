@extends('layouts.app')

@section('content')
<header>
    <h1>Daftar Item - {{ $category }}</h1>
</header>
<section class="items">
    @foreach ($items as $item)
        <div class="item">
            <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}">
            <p>{{ $item['name'] }}</p>
        </div>
    @endforeach
</section>
@endsection
