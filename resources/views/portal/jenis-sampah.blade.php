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
            <div class="category">
            <img src="assets/icons/plastik.jpeg" alt="Plastik">
            <p>Plastik</p>
        </div>
        <div class="category">
            <img src="assets/icons/logam.jpeg" alt="Logam">
            <p>Logam</p>
        </div>
        <div class="category">
            <img src="assets/icons/kertas.jpeg" alt="Kertas">
            <p>Kertas</p>
        </div>
        <div class="category">
            <img src="assets/icons/organik.png" alt="Organik">
            <p>Organik</p>
        </div>
        <div class="category">
            <img src="assets/icons/botol.png" alt="Botol Kaca">
            <p>Botol</p>
        </div>
    </section>

        <!-- Daftar Jenis Sampah -->
        <section class="daftar-jenis-sampah">
    <h2>Plastik</h2>
    <div class="items">
        <div class="item">
            <img src="{{ asset('assets/images/pet-bottle.png') }}" alt="Pet Botol">
            <h3>Pet Botol</h3>
            <p>Botol plastik yang umumnya digunakan untuk...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 1]) }}" class="read-more">Read More</a>
        </div>
        <div class="item">
            <img src="{{ asset('assets/images/plastik_hdpe.png') }}" alt="Plastik HDPE">
            <h3>Plastik HDPE</h3>
            <p>High-Density Polyethylene (HDPE) adalah...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 2]) }}" class="read-more">Read More</a>
        </div>
        <div class="item">
            <img src="{{ asset('assets/images/pp_gelas.png') }}" alt="PP Gelas">
            <h3>PP Gelas</h3>
            <p>Gelas plastik berbahan Polypropylene (PP)...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 3]) }}" class="read-more">Read More</a>
        </div>
        <div class="item">
            <img src="{{ asset('assets/images/plastik_lembaran.png') }}" alt="Plastik Lembaran">
            <h3>Plastik Lembaran</h3>
            <p>Jenis plastik fleksibel yang biasa digunakan...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 4]) }}" class="read-more">Read More</a>
        </div>
        <div class="item">
            <img src="{{ asset('assets/images/galon_air.png') }}" alt="Galon Air">
            <h3>Galon Air</h3>
            <p>Wadah besar berbahan plastik keras yang digunakan...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 5]) }}" class="read-more">Read More</a>
        </div>
    </div>

    <h2>Logam</h2>
    <div class="items">
        <div class="item">
            <img src="{{ asset('assets/images/ps_kaca.png') }}" alt="PS Kaca">
            <h3>PS Kaca</h3>
            <p>Polystyrene jenis bening yang sering digunakan...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 6]) }}" class="read-more">Read More</a>
        </div>
        <div class="item">
            <img src="{{ asset('assets/images/aluminium_sari.png') }}" alt="Aluminium Sari">
            <h3>Aluminium Sari</h3>
            <p>Aluminium foil tipis yang biasanya ditemukan...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 7]) }}" class="read-more">Read More</a>
        </div>
        <div class="item">
            <img src="{{ asset('assets/images/kaleng.png') }}" alt="Kaleng">
            <h3>Kaleng</h3>
            <p>Bekas wadah logam seperti kaleng minuman...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 8]) }}" class="read-more">Read More</a>
        </div>
        <div class="item">
            <img src="{{ asset('assets/images/besi.png') }}" alt="Besi">
            <h3>Besi</h3>
            <p> Potongan logam berat seperti batang besi bekas...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 9]) }}" class="read-more">Read More</a>
        </div>
        <div class="item">
            <img src="{{ asset('assets/images/aluminium.png') }}" alt="Aluminium">
            <h3>Aluminium</h3>
            <p>Logam ringan yang biasa ditemukan...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 10]) }}" class="read-more">Read More</a>
        </div>
        <div class="item">
            <img src="{{ asset('assets/images/tembaga.png') }}" alt="Tembaga">
            <h3>Tembaga</h3>
            <p>Logam berwarna kemerahan yang ...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 11]) }}" class="read-more">Read More</a>
        </div>
        <div class="item">
            <img src="{{ asset('assets/images/kuningan.png') }}" alt="Kuningan">
            <h3>Kuningan</h3>
            <p>Logam paduan antara tembaga dan...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 12]) }}" class="read-more">Read More</a>
        </div>
    </div>

    <h2>Kertas</h2>
    <div class="items">
        <div class="item">
            <img src="{{ asset('assets/images/koran.png') }}" alt="Koran">
            <h3>Koran</h3>
            <p>Kertas cetak bekas yang umumnya digunakan...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 13]) }}" class="read-more">Read More</a>
        </div>
        <div class="item">
            <img src="{{ asset('assets/images/hvs.png') }}" alt="HVS">
            <h3>HVS</h3>
            <p>Kertas putih polos bekas yang biasanya digunakan...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 14]) }}" class="read-more">Read More</a>
        </div>
        <div class="item">
            <img src="{{ asset('assets/images/dupleks.png') }}" alt="Dupleks">
            <h3>Dupleks</h3>
            <p>Kertas karton tebal berwarna cokelat...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 15]) }}" class="read-more">Read More</a>
        </div>
        <div class="item">
            <img src="{{ asset('assets/images/kertas_buram.png') }}" alt="Kertas Buram">
            <h3>Kertas Buram</h3>
            <p>Kertas kasar dengan permukaan...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 16]) }}" class="read-more">Read More</a>
        </div>
        <div class="item">
            <img src="{{ asset('assets/images/kantong_semen.png') }}" alt="Kantong Semen">
            <h3>Kantong Semen</h3>
            <p>Kertas bekas kemasan semen yang...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 17]) }}" class="read-more">Read More</a>
        </div>
        <div class="item">
            <img src="{{ asset('assets/images/kardus.png') }}" alt="Kardus">
            <h3>Kardus</h3>
            <p>Karton bergelombang yang digunakan...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 18]) }}" class="read-more">Read More</a>
        </div>
</div>

        <h2>Organik</h2>
        <div class="items">
        <div class="item">
            <img src="{{ asset('assets/images/jelantah.png') }}" alt="Jelantah">
            <h3>Jelantah</h3>
            <p>Minyak goreng bekas yang dapat diolah...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 19]) }}" class="read-more">Read More</a>
        </div>
        <div class="item">
            <img src="{{ asset('assets/images/sumpit_kayu.png') }}" alt="Sumpit Kayu">
            <h3>Sumpit Kayu</h3>
            <p>Alat makan sekali pakai berbahan...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 20]) }}" class="read-more">Read More</a>
        </div>
    </div>

    <h2>Botol Kaca</h2>
        <div class="items">
        <div class="item">
            <img src="{{ asset('assets/images/botol_kaca_bening.png') }}" alt="Botol Kaca Bening">
            <h3>Botol Kaca Bening</h3>
            <p>Botol kaca transparan seperti ...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 21]) }}" class="read-more">Read More</a>
        </div>
        <div class="item">
            <img src="{{ asset('assets/images/botol_kaca_warna.png') }}" alt="Botol Kaca warna">
            <h3>Botol Kaca Warna</h3>
            <p>Botol kaca berwarna seperti ...</p>
            <a href="{{ route('detail-jenis-sampah', ['id' => 2]) }}" class="read-more">Read More</a>
        </div>
    </div>
</section>

    </main>

    <footer>
        <p>HOMPIMPA - Jasa pengelola sampah</p>
        <p>© 2024 HOMPIMPA</p>
    </footer>
</body>
</html>
