<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampahController extends Controller
{
    public function index()
    {
        $jenis_sampah = [
            "Plastik" => [
                "image" => "assets/icons/plastik.jpeg", // Gambar kategori Plastik
                "items" => [
                    ["name" => "Pet Botol", "image" => "assets/images/pet_bottle.png", "link" => "detail.php?item=pet_bottle"],
                    ["name" => "Plastik HDPE", "image" => "assets/images/plastik_hdpe.png", "link" => "detail.php?item=plastik_hdpe"],
                    ["name" => "PP Gelas", "image" => "assets/images/pp_gelas.png", "link" => "detail.php?item=pp_gelas"],
                    ["name" => "Plastik Lembaran", "image" => "assets/images/plastik_lembaran.png", "link" => "detail.php?item=plastik_lembaran"],
                    ["name" => "Galon Air", "image" => "assets/images/galon_air.png", "link" => "detail.php?item=galon_air"],
                ],
            ],
            "Logam" => [
                "image" => "assets/icons/logam.jpeg", // Gambar kategori Logam
                "items" => [
                    ["name" => "PS Kaca", "image" => "assets/images/ps_kaca.png", "link" => "detail.php?item=ps_kaca"],
                    ["name" => "Aluminium Sari", "image" => "assets/images/aluminium_sari.png", "link" => "detail.php?item=aluminium_sari"],
                    ["name" => "Kaleng", "image" => "assets/images/kaleng.png", "link" => "detail.php?item=kaleng"],
                    ["name" => "Besi", "image" => "assets/images/besi.png", "link" => "detail.php?item=besi"],
                    ["name" => "Aluminium", "image" => "assets/images/aluminium.png", "link" => "detail.php?item=aluminium"],
                    ["name" => "Tembaga", "image" => "assets/images/tembaga.png", "link" => "detail.php?item=tembaga"],
                    ["name" => "Kuningan", "image" => "assets/images/kuningan.png", "link" => "detail.php?item=kuningan"],
                ],
            ],
            "Kertas" => [
                "image" => "assets/icons/kertas.jpeg", // Gambar kategori Kertas
                "items" => [
                    ["name" => "Koran", "image" => "assets/images/koran.png", "link" => "detail.php?item=koran"],
                    ["name" => "HVS", "image" => "assets/images/hvs.png", "link" => "detail.php?item=hvs"],
                    ["name" => "Dupleks", "image" => "assets/images/dupleks.png", "link" => "detail.php?item=dupleks"],
                    ["name" => "Kertas Buram", "image" => "assets/images/kertas_buram.png", "link" => "detail.php?item=kertas_buram"],
                    ["name" => "Kantong Semen", "image" => "assets/images/kantong_semen.png", "link" => "detail.php?item=kantong_semen"],
                    ["name" => "Kardus", "image" => "assets/images/kardus.png", "link" => "detail.php?item=kardus"],
                ],
            ],
            "Organik" => [
                "image" => "assets/icons/organik.png", // Gambar kategori Organik
                "items" => [
                    ["name" => "Jelantah", "image" => "assets/images/jelantah.png", "link" => "detail.php?item=jelantah"],
                    ["name" => "Sumpit Kayu", "image" => "assets/images/sumpit_kayu.png", "link" => "detail.php?item=sumpit_kayu"],
                ],
            ],
            "Botol Kaca" => [
                "image" => "assets/icons/botol.png", // Gambar kategori Botol Kaca
                "items" => [
                    ["name" => "Botol Kaca Bening", "image" => "assets/images/botol_kaca_bening.png", "link" => "detail.php?item=botol_kaca_bening"],
                    ["name" => "Botol Kaca Warna", "image" => "assets/images/botol_kaca_warna.png", "link" => "detail.php?item=botol_kaca_warna"],
                ],
            ],
        ];

        return view('portal.jenis_sampah', compact('jenis_sampah'));
    }
}
