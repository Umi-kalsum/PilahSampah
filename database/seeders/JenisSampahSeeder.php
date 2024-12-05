<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisSampahSeeder extends Seeder
{
    public function run()
    {
        DB::table('jenis_sampah')->insert([
            ['name' => 'Plastik', 'image' => 'assets/icons/plastik.jpeg'],
            ['name' => 'Kertas', 'image' => 'assets/icons/kertas.jpeg'],
            ['name' => 'Organik', 'image' => 'assets/icons/organik.png'],
        ]);
    }
}

