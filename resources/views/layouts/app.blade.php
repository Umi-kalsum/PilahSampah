<!DOCTYPE html>
<<<<<<< HEAD
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Pilah Sampah'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

<<<<<<< HEAD
<<<<<<< HEAD
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Livewire -->
    @livewireStyles
</head>
<body class="font-sans antialiased bg-gray-100">
    <x-banner />

    <div class="min-h-screen">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>
=======
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
=======
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
>>>>>>> 9bbb77e (menambahkan jenis sampah)

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Livewire -->
    @livewireStyles
</head>
<body class="font-sans antialiased bg-gray-100">
    <x-banner />

    <div class="min-h-screen">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>

<<<<<<< HEAD
        @livewireScripts
    </body>
>>>>>>> 03026fb (manambahkan landingpage,jenis sampah)
=======
    @stack('modals')

    @livewireScripts
</body>
>>>>>>> 9bbb77e (menambahkan jenis sampah)
=======
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
>>>>>>> 05483c3 (View portal artikel)
</html>
