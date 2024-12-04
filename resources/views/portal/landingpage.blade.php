<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMPIMPA - Jasa Pengelola Sampah</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> <!-- Gunakan helper asset() -->
</head>  
<body>
<header>
    <div class="logo">HOMPIMPA</div>
    <ul class="navbar">
        <li><a href="{{ url('about_me') }}" class="text">About Me</a></li>    
        <li><a href="{{ url('/jenis-sampah') }}">Jenis Sampah</a></li>
        <li><a href="#">Lokasi TPS</a></li>
        <li><a href="#">Artikel</a></li>
        <li><a href="{{ url('login') }}" class="btn">Sign-in</a></li>
    </ul>
</header>   

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h1>Hi everyone, Welcome to HOMPIMPA</h1>        
            <p>Selamat datang di HOMPIMPA! Mari bersama-sama menjaga lingkungan dengan cara yang kreatif dan menyenangkan. 
                Di sini, kamu dapat belajar cara mengelola sampah, berbagi ide daur ulang, dan berkolaborasi untuk menciptakan dunia 
                yang lebih bersih dan sehat. Jadilah bagian dari perubahan!</p>
            <a href="#" class="btn">Mulai Pilah Sampah</a>
        </div>
        <div class="hero-image">
            <img src="{{ asset('assets/images/hero-image.png') }}" alt="Hero Image">
        </div>
    </section>

    <!-- Jenis Sampah Section -->
    <section class="jenis-sampah">
        <h2>Jenis Sampah</h2>
        <div class="cards">
            <div class="card"><img src="{{ asset('assets/icons/botol.png') }}" alt="Sampah 1"></div>
            <div class="card"><img src="{{ asset('assets/icons/kertas.jpeg') }}" alt="Sampah 2"></div>
            <div class="card"><img src="{{ asset('assets/icons/organik.png') }}" alt="Sampah 3"></div>
            <div class="card"><img src="{{ asset('assets/icons/logam.jpeg') }}" alt="Sampah 4"></div>
            <div class="card"><img src="{{ asset('assets/icons/plastik.jpeg') }}" alt="Sampah 5"></div>
        </div>
        <a href="{{ url('jenis_sampah') }}" class="btn">Lihat Jenis Sampah</a>
    </section>

    <!-- Lokasi TPS Section -->
    <section class="lokasi-tps">
        <h2>Lokasi TPS</h2>
        <div class="locations">
            <div class="location">Bantul</div>
            <div class="location">Yogyakarta</div>
            <div class="location">Sleman</div>
            <div class="location">Kulon Progo</div>
        </div>
        <a href="#" class="btn">Lihat Semua Lokasi</a>
    </section>

    <!-- Just to Remind Section -->
    <section class="just-to-remind">
        <h2>Just to remind you, we are HOMPIMPA. Service provider in managing various types of waste.</h2>
        <div class="remind-image">
            <img src="{{ asset('assets/images/just-to-remind.jpg') }}" alt="Just to Remind">
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
