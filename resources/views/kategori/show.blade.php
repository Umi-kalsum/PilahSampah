<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $kategori->nama }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>{{ $kategori->nama }} - Detail Item</h1>
    </header>

    <section class="items">
        <h2>Item dalam kategori {{ $kategori->nama }}</h2>
        @foreach ($items as $item)
            <div class="item">
                <img src="{{ asset('assets/images/' . $item->gambar) }}" alt="{{ $item->nama }}">
                <p>{{ $item->nama }}</p>
                <p>{{ $item->deskripsi }}</p>
            </div>
        @endforeach
    </section>

</body>
</html>
