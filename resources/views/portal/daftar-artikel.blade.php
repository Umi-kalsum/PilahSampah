<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Artikel - HOMPIMPA</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<header>
    <div class="logo">HOMPIMPA</div>
    <ul class="navbar">
        <li><a href="{{ url('about_me') }}" class="text">About Me</a></li>
        <li><a href="{{ route('jenis-sampah') }}">Jenis Sampah</a></li>
        <li><a href="#">Lokasi TPS</a></li>
        <li><a href="{{ route('artikel.daftar') }}">Artikel</a></li>
        <li><a href="{{ route('login') }}" class="btn">Sign-in</a></li>
    </ul>
</header>

<main>
    <h1>Daftar Artikel</h1>
    <div class="article-container">
        @foreach ($artikels as $artikel)
            <div class="article">
                <img src="{{ asset('assets/images/' . $artikel['gambar']) }}" alt="{{ $artikel['judul'] }}" class="article-image">
                <h2>{{ $artikel['judul'] }}</h2>
                <p>{{ $artikel['deskripsi'] }}</p>
                <a href="{{ route('artikel.detail', $artikel['id']) }}" class="read-more">Read More</a>
            </div>
        @endforeach
    </div>
</main>

<footer>
    <div class="footer-content">
        <p>HOMPIMPA - Jasa pengelola sampah</p>
        <p>Email: hompimpa@website.com</p>
    </div>
</footer>
</body>
</html>
