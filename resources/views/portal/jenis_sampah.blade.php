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
        <div class="logo">HOMPIMPA</div>
        <ul class="navbar">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('jenis-sampah') }}" class="active">Jenis Sampah</a></li>
            <li><a href="#">Lokasi TPS</a></li>
            <li><a href="#">Artikel</a></li>
            <li><a href="{{ url('login') }}">Sign-in</a></li>
        </ul>
    </header>

    <main>
        <section class="jenis-sampah">
            <h1>Jenis Sampah</h1>
            <div class="cards">
                @foreach ($jenisSampah as $sampah)
                    <div class="card">
                        <img src="{{ asset($sampah['gambar']) }}" alt="{{ $sampah['nama'] }}">
                        <p>{{ $sampah['nama'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 HOMPIMPA</p>
    </footer>
</body>
</html>
