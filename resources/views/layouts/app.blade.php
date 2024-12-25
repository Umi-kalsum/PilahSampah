<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pilah Sampah')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <div class="logo">
                <a href="/">Pilah Sampah</a>
            </div>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/portal/artikel">Artikel</a></li>
                @auth
                    @if(auth()->user()->role === 'admin')
                        <li><a href="/portal/artikel/tambah">Tambah Artikel</a></li>
                    @endif
                    <li><a href="/logout">Logout</a></li>
                @else
                    <li><a href="/login">Login</a></li>
                @endauth
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Pilah Sampah. All rights reserved.</p>
    </footer>
</body>
</html>
