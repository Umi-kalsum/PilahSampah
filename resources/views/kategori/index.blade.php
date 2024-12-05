<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Sampah</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Daftar Kategori Sampah</h1>
    </header>

    <section class="categories">
        @foreach ($kategori as $kat)
            <div class="category">
                <a href="{{ route('kategori.show', $kat->id) }}">
                    <img src="{{ asset('assets/icons/' . $kat->gambar) }}" alt="{{ $kat->nama }}">
                    <p>{{ $kat->nama }}</p>
                </a>
            </div>
        @endforeach
    </section>

</body>
</html>
