<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('layouts.master_dashboard', function ($view) {
            $menus = [
                ['title' => 'Dashboard', 'icon'=>'assets/icons/navbar/dashboard.png','route' => 'dashboard', 'roles' => ['admin', 'super_admin']],
                ['title' => 'User', 'icon'=>'assets/icons/navbar/user.png', 'route' => 'sampah.kelola', 'roles' => ['super_admin']],
                ['title' => 'Jenis Sampah', 'icon'=>'assets/icons/navbar/triangle.png', 'route' => 'sampah.kelola', 'roles' => ['admin', 'super_admin']],
                ['title' => 'Lokasi TPS', 'icon'=>'assets/icons/navbar/location.png', 'route' => 'sampah.kelola', 'roles' => ['admin', 'super_admin']],
                ['title' => 'Transaksi sampah', 'icon'=>'assets/icons/navbar/bag.png', 'route' => 'sampah.kelola', 'roles' => ['super_admin']],
                ['title' => 'Dompet', 'icon'=>'assets/icons/navbar/dollar.png', 'route' => 'sampah.kelola', 'roles' => ['super_admin']],
                ['title' => 'Request Penarikan', 'icon'=>'assets/icons/navbar/chat.png', 'route' => 'sampah.kelola', 'roles' => ['super_admin']],
                ['title' => 'Transaksi Penarikan', 'icon'=>'assets/icons/navbar/checkbox.png', 'route' => 'sampah.kelola', 'roles' => ['super_admin']],
                ['title' => 'Artikel', 'icon'=>'assets/icons/navbar/file.png', 'route' => 'artikel.daftar', 'roles' => ['super_admin']],
            ];

            \Log::info('Menus:', $menus);


            $view->with('menus', $menus);
        });
    }

}
