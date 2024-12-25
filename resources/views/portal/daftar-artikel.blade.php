<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Artikel</title>
    <link rel="stylesheet" href="{{ asset('css/portal.css') }}">
</head>
<body>
    <header class="header">
        <h1>Daftar Artikel</h1>
    </header>

    <main class="content">
        <ul class="article-list">
            @foreach($articles as $article)
            <li class="article-item">
                <a href="{{ route('artikel.detail', $article->id) }}" class="article-title">
                    {{ $article->title }}
                </a>
                <p class="article-excerpt">{{ $article->excerpt }}</p>
            </li>
            @endforeach
        </ul>
    </main>

    <footer class="footer">
        <p>&copy; 2024 Portal Artikel</p>
    </footer>
</body>
</html>
