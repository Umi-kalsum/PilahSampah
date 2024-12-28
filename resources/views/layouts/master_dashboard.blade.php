<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <style>
        body {
            margin: 0;
            font-family: 'Roboto' !important;
        }

        /* .headbar {
            background-color: #3B82F6;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        } */

        .sidebar {
            position: fixed;
            /* top: 60px; */
            /* Height of the headbar */
            left: 0;
            background-color: #343A40;
            color: white;
            height: 100%;
            width: 18%;
            overflow-y: auto;
            /* padding-top: 20px; */
        }

        .sidebar a {
            display: flex;
            color: white;
            /* padding: 10px 15px; */
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #374151;
        }

        .sidebar a.active {
            background-color: #D63384;
            /* Warna khusus untuk halaman aktif */
            font-weight: bold;
            /* Opsional */
        }

        .content {
            margin-left: 25%;
            width: 75%;
            /* Width of the sidebar */
            /* margin-top: 60px; */
            /* Height of the headbar */
            /* padding: 20px; */
        }

        .menu-item {
            display: flex;
            /* Flexbox untuk tata letak horizontal */
            align-items: center;
            /* Ikon dan teks sejajar secara vertikal */
            padding: 10px 15px;
            /* Spasi dalam menu */
            text-decoration: none;
            /* Hapus garis bawah teks */
            color: white;
            /* Warna teks */
            transition: background-color 0.3s ease;
        }

        .menu-icon {
            flex-shrink: 0;
            /* Ikon tidak menyusut */
            width: 24px;
            /* Ukuran ikon tetap */
            height: 24px;
            /* Ukuran ikon tetap */
            margin-right: 10px;
            /* Jarak antara ikon dan teks */
            display: flex;
            /* Pastikan ikon tetap dalam mode flexbox */
            justify-content: center;
            /* Ikon di tengah horizontal */
            align-items: center;
            /* Ikon di tengah vertikal */
        }

        .menu-icon img {
            width: 100%;
            /* Ikon mengisi kotak sepenuhnya */
            height: 100%;
            /* Tinggi ikon sesuai */
            object-fit: contain;
            /* Menjaga proporsi ikon */
        }

        .menu-text {
            flex-grow: 1;
            /* Teks memenuhi ruang tersisa */
            text-align: left;
            /* Teks rata kiri */
        }

        .sidebar-bottom {
            border-top: 1px solid #555;
            padding: 10px 0;
        }

        .profile-menu {
            display: none;
            flex-direction: column;
            background-color: #343A40;
        }

        .profile-menu.active {
            display: flex;
        }

        .profile-item {
            padding: 10px 15px;
            color: white;
            cursor: pointer;
        }

        .profile-item:hover {
            background-color: #374151;
        }

        .side-head{
            display: flexbox;
            height: 100px;
            align-items: center;
            text-align: center
            padding: 10px 15px;

        }
        .side-head .head-text{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="sidebar" >
        <div class="side-head" >
            <a class="head-text" href="{{route('dashboard')}}">
                HOMPIMPA
            </a>    
        </div>
        @if(isset($menus))
            @foreach($menus as $menu)
                @if(in_array(auth()->user()->role, $menu['roles']))
                    <a href="{{ route(name: $menu['route']) }}"
                        class="menu-item {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                        <div class="menu-icon">
                            <img src="{{ asset($menu['icon']) }}" alt="{{ $menu['title'] }} icon" class="icon">
                        </div>
                        <span class="menu-text">
                            {{ $menu['title'] }}
                        </span>
                    </a>
                @endif
            @endforeach
        @else
            <p>Menus not available.</p>
        @endif
        <div class="sidebar-bottom">
            <div class="menu-item" onclick="toggleProfileMenu()">
                <div class="menu-icon">
                    <img src="{{ asset('assets/icons/navbar/setting.png') }}" alt="Settings Icon">
                </div>
                <a class="menu-text">Settings</a>
            </div>
            <div id="profile-menu" class="profile-menu">
                <div class="profile-item">Profil {{ auth()->user()->name }}</div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="profile-item"
                        style="background:none; border:none; color:white; cursor:pointer; text-align:left;">Logout</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        @yield('content')
    </div>
    <script>
        function toggleProfileMenu() {
            const profileMenu = document.getElementById('profile-menu');
            profileMenu.classList.toggle('active');
        }
    </script>
</body>

</html>