<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Sampah</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <header>
        <h1>Jenis Sampah yang Bisa di HOMPIMPAin</h1>
    </header>

    <main>
        <!-- Kategori Sampah -->
        <section class="kategori-sampah">
            <h2>Kategori</h2>
            <div class="categories">
                <div class="category">Plastik</div>
                <div class="category">Logam</div>
                <div class="category">Kertas</div>
                <div class="category">Organik</div>
                <div class="category">Botol Kaca</div>
            </div>
        </section>

        <!-- Daftar Jenis Sampah -->
        <section class="daftar-jenis-sampah">
            <h2>Plastik</h2>
            <div class="items">
                <div class="item">
                    <img src="{{ asset('assets/images/plastik.png') }}" alt="Plastik">
                    <h3>Pet Botol</h3>
                    <p>Lorem ipsum dolor sit amet...</p>
                    <a href="{{ route('detail-jenis-sampah', ['id' => 1]) }}" class="read-more">Read More</a>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/plastik-hdpe.png') }}" alt="Plastik HDPE">
                    <h3>Plastik HDPE</h3>
                    <p>Lorem ipsum dolor sit amet...</p>
                    <a href="{{ route('detail-jenis-sampah', ['id' => 2]) }}" class="read-more">Read More</a>
                </div>
                <!-- Tambahkan daftar lainnya sesuai kebutuhan -->
            </div>
        </section>
    </main>

    <footer>
        <p>HOMPIMPA - Jasa pengelola sampah</p>
        <p>© 2024 HOMPIMPA</p>
    </footer>
</body>
</html>
