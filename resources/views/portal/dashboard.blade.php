<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - HOMPIMPA</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<header>
    <div class="logo">HOMPIMPA</div>
    <ul class="navbar">
        <li><a href="{{ route('logout') }}" class="btn">Logout</a></li>
    </ul>
</header>

<main>
    <section class="dashboard">
        <h1>Selamat Datang, {{ Auth::user()->name }}!</h1>
        <p>Ini adalah dashboard Anda di HOMPIMPA.</p>

        <div class="actions">
        <a href="{{ route('sampah.kelola') }}" class="btn">Kelola Sampah</a>
        <a href="{{ route('artikel.daftar') }}" class="btn">Lihat Artikel</a>
        </div>
    </section>
</main>

<footer>
    <div class="footer-content">
        <p>HOMPIMPA - Jasa pengelola sampah</p>
        <p>Email: hompimpa@website.com</p>
    </div>
</footer>
</body>
</html>
