<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e7f0fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-card {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-card h1 {
            font-size: 1.8rem;
            color: #007bff;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h1 class="text-center">Login</h1>
        <p class="text-center text-muted">Silakan masuk menggunakan akun Anda.</p>
        <form action="{{ route('authenticate') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email Anda" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password Anda" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">LOGIN</button>
        </form>
        <div class="mt-3 text-center">
            <a href="#" class="text-decoration-none">Forgot Password?</a>
        </div>
        <div class="mt-2 text-center">
            <p class="mb-0">Belum punya akun? <a href="{{ route('register') }}" class="text-decoration-none">Daftar sekarang</a></p>
        </div>
    </div>
</body>
</html>
