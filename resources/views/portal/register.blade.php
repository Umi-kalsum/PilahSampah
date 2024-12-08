<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - HOMPIMPA</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <header>
        <div class="logo">HOMPIMPA</div>
    </header>

    <main class="auth-container">
        <div class="form-box">
            <h1>Register</h1>
            <form method="POST" action="{{ route('register.post') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password" required>
                </div>
                <button type="submit" class="btn">Register</button>
            </form>
            <p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
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
