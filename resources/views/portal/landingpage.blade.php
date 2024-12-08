<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMPIMPA - Jasa Pengelola Sampah</title>
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
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h1>Hi everyone, Welcome to HOMPIMPA</h1>
            <p>
                Selamat datang di HOMPIMPA! Mari bersama-sama menjaga lingkungan dengan cara yang kreatif dan menyenangkan.
                Di sini, kamu dapat belajar cara mengelola sampah, berbagi ide daur ulang, dan berkolaborasi untuk menciptakan dunia
                yang lebih bersih dan sehat. Jadilah bagian dari perubahan!
            </p>
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
            <div class="card"><img src="{{ asset('assets/icons/botol.png') }}" alt="Ikon Sampah Botol"></div>
            <div class="card"><img src="{{ asset('assets/icons/kertas.jpeg') }}" alt="Ikon Sampah Kertas"></div>
            <div class="card"><img src="{{ asset('assets/icons/organik.png') }}" alt="Ikon Sampah Organik"></div>
            <div class="card"><img src="{{ asset('assets/icons/logam.jpeg') }}" alt="Ikon Sampah Logam"></div>
            <div class="card"><img src="{{ asset('assets/icons/plastik.jpeg') }}" alt="Ikon Sampah Plastik"></div>
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

    <!-- Artikel Section -->
    <section class="artikel" id="artikel">
        <h2>Artikel</h2>
        <div class="article-container">
            <!-- Artikel 1 -->
            <div class="article">
                <p>"Pelajari bagaimana mengelola sampah organik untuk lingkungan yang lebih bersih dan sehat."</p>
                <a href="{{ url('artikel/1') }}" class="read-more">Read More</a>
            </div>
            <!-- Artikel 2 -->
            <div class="article">
                <p>"Mengapa penting untuk memisahkan jenis sampah sejak dini? Simak penjelasannya di sini."</p>
                <a href="{{ url('artikel/2') }}" class="read-more">Read More</a>
            </div>
            <!-- Artikel 3 -->
            <div class="article">
                <p>"Inovasi terbaru dalam daur ulang plastik dan logam untuk membantu mengurangi limbah."</p>
                <a href="{{ url('artikel/3') }}" class="read-more">Read More</a>
            </div>
            <!-- Artikel 4 -->
            <div class="article">
                <p>"Daur ulang kertas menjadi karya seni: inspirasi untuk memanfaatkan kembali sampah."</p>
                <a href="{{ url('artikel/4') }}" class="read-more">Read More</a>
            </div>
        </div>
    </section>

    <!-- Just to Remind Section -->
    <section class="just-to-remind">
        <div class="content">
            <h2>Just to remind you, we are HOMPIMPA. Service provider in managing various types of waste.</h2>
            <div class="image">
                <img src="{{ asset('assets/images/just-to-remind.jpg') }}" alt="Just to Remind">
            </div>
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
