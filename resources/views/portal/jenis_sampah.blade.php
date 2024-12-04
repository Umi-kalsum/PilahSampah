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

    <!-- Daftar Kategori -->
    <section class="categories">
        @foreach($jenis_sampah as $jenis => $data)
            <div class="category">
                <img src="{{ asset($data['image']) }}" alt="{{ $jenis }}">
                <p>{{ $jenis }}</p>
            </div>
        @endforeach
    </section>

    <!-- Daftar Item Berdasarkan Kategori -->
    @foreach($jenis_sampah as $jenis => $data)
        <section class="items">
            <h2>{{ $jenis }}</h2>
            <div class="item-list">
                @foreach($data['items'] as $item)
                    <div class="item">
                        <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}">
                        <p>{{ $item['name'] }}</p>
                        <a href="{{ url($item['link']) }}">Detail</a>
                    </div>
                @endforeach
            </div>
        </section>
    @endforeach

    <footer>
        <p>&copy; 2024 Pilah Sampah. All rights reserved.</p>
    </footer>
</body>
</html>
