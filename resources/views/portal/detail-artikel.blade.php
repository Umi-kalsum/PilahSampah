<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $artikel['judul'] }} - HOMPIMPA</title>
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
</body>
</html>
