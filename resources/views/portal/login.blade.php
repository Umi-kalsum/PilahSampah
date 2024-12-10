<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - HOMPIMPA</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <header>
        <div class="logo">HOMPIMPA</div>
    </header>

    <main class="auth-container">
        <div class="form-box">
            <h1>Login</h1>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
              @endif

            <form method="POST" action="{{ route('login.post') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
            <p>Belum punya akun? <a href="{{ route('register') }}">Register</a></p>
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <p>HOMPIMPA - Jasa Pengelola Sampah</p>
            <p>Email: hompimpa@website.com</p>
        </div>
    </footer>
</body>
</html>
