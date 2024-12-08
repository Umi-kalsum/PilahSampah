<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>
<body>
    <div class="content">
        @if($id == 1)
            <!-- Artikel 1 -->
            <h1>Mengurangi Sampah Plastik</h1>
            <img src="/images/artikel1.jpg" alt="Mengurangi Sampah Plastik">
            <p>Tahukah Anda bahwa plastik membutuhkan lebih dari 100 tahun untuk terurai?</p>
            <p>Artikel ini membahas langkah-langkah untuk mengurangi sampah plastik...</p>
        @elseif($id == 2)
            <!-- Artikel 2 -->
            <h1>Cara Efektif Mengelola Sampah</h1>
            <img src="/images/artikel2.jpg" alt="Cara Efektif Mengelola Sampah">
            <p>Pengelolaan sampah yang baik dapat membantu menjaga lingkungan kita...</p>
            <p>Mengelola sampah dengan cara yang efektif sangat penting...</p>
        @else
            <!-- Artikel Tidak Ditemukan -->
            <h1>Artikel Tidak Ditemukan</h1>
            <p>Maaf, artikel yang Anda cari tidak tersedia.</p>
        @endif
    </div>

    <p>
        <a href="/daftar-artikel">Back to Daftar Artikel</a>
    </p>
>>>>>>> df0d3fe (menambahkan view portal login& register)
</body>
</html>
