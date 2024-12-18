<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Sampah</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

<header>
    <div class="logo">HOMPIMPA</div>
    <ul class="navbar">
        <li><a href="{{ url('about_me') }}" class="text">About Me</a></li>
        <li><a href="{{ route('jenis-sampah') }}">Jenis Sampah</a></li>
        <li><a href="{{ route('sampah.kelola') }}" class="active">Kelola Sampah</a></li>
        <li><a href="{{ route('artikel.daftar') }}">Artikel</a></li>
        <li><a href="{{ route('login') }}" class="btn">Sign-in</a></li>
    </ul>
</header>

<main>
    <h1>Kelola Sampah</h1>
    
    <div class="sampah-list">
        @foreach($sampahs as $sampah)
            <div class="sampah-card">
                <h3>{{ $sampah['nama'] }}</h3>
                <p>Jenis: {{ $sampah['jenis'] }}</p>
                <p>Harga: Rp {{ number_format($sampah['harga'], 0, ',', '.') }}</p>
                <a href="#" class="btn">Kelola</a>
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
