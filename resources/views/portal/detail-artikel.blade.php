<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Artikel</title>
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
</body>
</html>
