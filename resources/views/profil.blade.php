<!-- resources/views/profil.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-container {
            background-color: #f0f0f0;
            border-radius: 10px;
            padding: 30px;
            max-width: 600px;
            margin: 50px auto;
        }
        .profile-image {
            width: 100px;
            height: 100px;
            background-color: #ddd;
            border-radius: 50%;
            margin: 0 auto 20px;
        }
        .card-section {
            padding: 15px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-container">
            <!-- Gambar Profil -->
            <div class="profile-image"></div>

            <!-- Bagian Total Saldo -->
            <div class="card-section text-center mb-4">
                <h5 class="font-weight-bold">Total Saldo</h5>
                <p>Rp. 50.000</p>
            </div>

            <!-- Informasi Lain -->
            <div class="form-group mb-3">
                <input type="text" class="form-control" placeholder="Nama">
            </div>
            <div class="form-group mb-3">
                <input type="text" class="form-control" placeholder="Alamat Email">
            </div>
            <div class="form-group mb-3">
                <input type="text" class="form-control" placeholder="Bantuan">
            </div>
            <div class="form-group mb-3">
                <input type="text" class="form-control" placeholder="Kontak">
            </div>
            <div class="form-group mb-3">
                <input type="text" class="form-control" placeholder="Privasi">
            </div>
        </div>
    </div>

    <!-- Bootstrap JS dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
