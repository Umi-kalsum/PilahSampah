<<<<<<< HEAD
<<<<<<< HEAD
@extends('layouts.app')

@section('content')
<header>
    <h1>Jenis Sampah yang Bisa di Pilah</h1>
</header>
<section class="categories">
    @foreach ($jenisSampah as $jenis => $data)
        <div class="category">
            <img src="{{ asset($data['image']) }}" alt="{{ ucfirst($jenis) }}">
            <p>{{ ucfirst($jenis) }}</p>
            <a href="{{ route('jenis-sampah.detail', $jenis) }}" class="btn">Lihat Detail</a>
        </div>
    @endforeach
</section>
@endsection
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Jenis Sampah</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .categories, .items {
            padding: 20px;
        }
        .categories {
            display: flex;
            justify-content: space-around;
            background-color: #f4f4f4;
        }
        .category, .item {
            text-align: center;
            margin: 10px;
            width: 150px;
        }
        .category img, .item img {
            width: 100px;
            height: 100px;
            margin-bottom: 10px;
            border-radius: 8px;
        }
        .category p, .item p {
            font-size: 16px;
            font-weight: bold;
        }
        .item a {
            display: inline-block;
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .item a:hover {
            background-color: #45a049;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Jenis Sampah yang Bisa di HOMPIMPAPin</h1>
    </header>
=======
@extends('layouts.app')
>>>>>>> 9bbb77e (menambahkan jenis sampah)

@section('content')
<header>
    <h1>Jenis Sampah yang Bisa di Pilah</h1>
</header>
<section class="categories">
    @foreach ($jenisSampah as $jenis => $data)
        <div class="category">
            <img src="{{ asset($data['image']) }}" alt="{{ ucfirst($jenis) }}">
            <p>{{ ucfirst($jenis) }}</p>
            <a href="{{ route('jenis-sampah.detail', $jenis) }}" class="btn">Lihat Detail</a>
        </div>
    @endforeach
<<<<<<< HEAD

    <footer>
        <p>&copy; 2024 Pilah Sampah. All rights reserved.</p>
    </footer>
</body>
</html>
>>>>>>> 03026fb (manambahkan landingpage,jenis sampah)
=======
</section>
@endsection
>>>>>>> 9bbb77e (menambahkan jenis sampah)
