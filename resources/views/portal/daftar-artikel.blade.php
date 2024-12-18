<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
<<<<<<< HEAD
    <title>Daftar Artikel</title>
<<<<<<< HEAD
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
=======
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .artikel { margin-bottom: 20px; }
        .artikel img { width: 300px; height: 200px; object-fit: cover; }
    </style>
=======
    <title>Daftar Artikel - HOMPIMPA</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
>>>>>>> e0712a9 (login& regis)
=======
    <title>Daftar Artikel</title>
    <link rel="stylesheet" href="{{ asset('css/portal.css') }}">
>>>>>>> 05483c3 (View portal artikel)
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

<<<<<<< HEAD
<footer>
    <div class="footer-content">
        <p>HOMPIMPA - Jasa pengelola sampah</p>
        <p>Email: hompimpa@website.com</p>
    </div>
<<<<<<< HEAD
>>>>>>> df0d3fe (menambahkan view portal login& register)
=======
</footer>
>>>>>>> e0712a9 (login& regis)
=======
    <footer class="footer">
        <p>&copy; 2024 Portal Artikel</p>
    </footer>
>>>>>>> 05483c3 (View portal artikel)
</body>
</html>
