<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Jenis Sampah</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <header >
        <h1>Detail Jenis Sampah</h1>
    </header>

    <main>
        <div class="detail-container">
            <div class="image">
                <img src="{{ asset('assets/images/pet-bottle.png') }}" alt="Detail Gambar">
            </div>
            <div class="detail-content">
                <h2>Pet Botol</h2>
                <p class="price">Harga per KG: Rp. 3.000</p>
                <p>
                Pet Botol merupakan botol plastik yang sering digunakan untuk air mineral, 
                jus, atau minuman ringan lainnya. Bahannya ringan, transparan, dan sering kali
                berwarna bening atau sedikit kebiruan. PET (Polyethylene Terephthalate) adalah jenis
                plastik yang mudah didaur ulang menjadi berbagai produk baru seperti kain poliester, 
                botol plastik baru, atau bahkan bahan isolasi. Botol PET bekas harus dibersihkan dari 
                residu cairan sebelum dikumpulkan agar proses daur ulangnya lebih efisien.
                </p>
                </div>

                <div class="image">
                <img src="{{ asset('assets/images/plastik_hdpe.png') }}" alt="Detail Gambar">
            </div>
            <div class="detail-content">
                <h2>Plastik HDPE</h2>
                <p class="price">Harga per KG: Rp. 5.000</p>
                <p>
                Plastik HDPE (High-Density Polyethylene) adalah jenis plastik keras yang sering 
                ditemukan dalam bentuk botol minyak goreng, botol deterjen, atau wadah cairan pembersih. 
                HDPE memiliki karakteristik tahan terhadap suhu ekstrem dan bahan kimia, sehingga cocok untuk 
                didaur ulang menjadi barang baru seperti pipa, kontainer penyimpanan, atau peralatan rumah tangga. 
                Plastik HDPE biasanya memiliki warna solid seperti putih, hijau, atau biru, dan harus dipisahkan 
                dari bahan lain sebelum proses daur ulang. 
                </p>
            </div>
        </div>
    </main>

    <footer>
        <p>HOMPIMPA - Jasa pengelola sampah</p>
        <p>© 2024 HOMPIMPA</p>
    </footer>
</body>
</html>
