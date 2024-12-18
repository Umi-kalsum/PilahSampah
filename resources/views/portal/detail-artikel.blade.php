<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
<<<<<<< HEAD
    <title>Detail Artikel</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="{{ asset('css/portal.css') }}">
</head>
<body>
    <header class="header">
        <h1>{{ $article->title }}</h1>
    </header>

    <main class="content">
        <article class="article-detail">
            <p class="article-meta">Diposting pada: {{ $article->created_at->format('d M Y') }}</p>
            <div class="article-body">
                {!! $article->content !!}
            </div>
        </article>

        <a href="{{ route('artikel.daftar') }}" class="back-link">← Kembali ke Daftar Artikel</a>
    </main>

    <footer class="footer">
        <p>&copy; 2024 Portal Artikel</p>
    </footer>
=======
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .content img { width: 400px; height: 300px; object-fit: cover; margin-bottom: 20px; }
    </style>
=======
    <title>{{ $artikel['judul'] }} - HOMPIMPA</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
>>>>>>> e0712a9 (login& regis)
=======
    <title>Detail Artikel</title>
    <link rel="stylesheet" href="{{ asset('css/portal.css') }}">
>>>>>>> 05483c3 (View portal artikel)
</head>
<body>
    <header class="header">
        <h1>{{ $article->title }}</h1>
    </header>

<<<<<<< HEAD
<<<<<<< HEAD
    <p>
        <a href="/daftar-artikel">Back to Daftar Artikel</a>
    </p>
>>>>>>> df0d3fe (menambahkan view portal login& register)
=======
<main>
    <h1>{{ $artikel['judul'] }}</h1>
    <img src="{{ asset('assets/images/' . $artikel['gambar']) }}" alt="{{ $artikel['judul'] }}" class="article-image">
    <p>{{ $artikel['konten'] }}</p>
    <a href="{{ route('artikel.daftar') }}" class="btn">Kembali ke Daftar Artikel</a>
</main>

<footer>
    <div class="footer-content">
        <p>HOMPIMPA - Jasa pengelola sampah</p>
        <p>Email: hompimpa@website.com</p>
    </div>
</footer>
>>>>>>> e0712a9 (login& regis)
=======
    <main class="content">
        <article class="article-detail">
            <p class="article-meta">Diposting pada: {{ $article->created_at->format('d M Y') }}</p>
            <div class="article-body">
                {!! $article->content !!}
            </div>
        </article>

        <a href="{{ route('artikel.daftar') }}" class="back-link">← Kembali ke Daftar Artikel</a>
    </main>

    <footer class="footer">
        <p>&copy; 2024 Portal Artikel</p>
    </footer>
>>>>>>> 05483c3 (View portal artikel)
</body>
</html>
