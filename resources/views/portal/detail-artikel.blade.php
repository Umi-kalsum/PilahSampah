<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Artikel</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .content img { width: 400px; height: 300px; object-fit: cover; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="content">
        @if($id == 1)
            <!-- Artikel 1 -->
            <h1>Mengurangi Sampah Plastik</h1>
            <img src="/images/artikel1.jpg" alt="Mengurangi Sampah Plastik">
            <p>Tahukah Anda bahwa plastik membutuhkan lebih dari 100 tahun untuk terurai?</p>
            <p>Artikel ini membahas langkah-langkah untuk mengurangi sampah plastik...</p>
        @elseif($id == 2)
            <!-- Artikel 2 -->
            <h1>Cara Efektif Mengelola Sampah</h1>
            <img src="/images/artikel2.jpg" alt="Cara Efektif Mengelola Sampah">
            <p>Pengelolaan sampah yang baik dapat membantu menjaga lingkungan kita...</p>
            <p>Mengelola sampah dengan cara yang efektif sangat penting...</p>
        @else
            <!-- Artikel Tidak Ditemukan -->
            <h1>Artikel Tidak Ditemukan</h1>
            <p>Maaf, artikel yang Anda cari tidak tersedia.</p>
        @endif
    </div>

    <p>
        <a href="/daftar-artikel">Back to Daftar Artikel</a>
    </p>
</body>
</html>
