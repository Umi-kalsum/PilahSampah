@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Sampah</h1>
        <div class="card mb-4">
            <img src="{{ asset($itemDetail['image']) }}" class="card-img-top" alt="{{ $itemDetail['name'] }}">
            <div class="card-body">
                <h5 class="card-title">{{ $itemDetail['name'] }}</h5>
                <p class="card-text">{{ $itemDetail['description'] }}</p>
                <p class="card-text"><strong>Harga: </strong>{{ $itemDetail['price'] }}</p>
            </div>
        </div>
    </div>
@endsection
