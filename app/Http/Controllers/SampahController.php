<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampahController extends Controller
{
    private $jenis_sampah = [
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

    private $items =  [
        "pet_bottle" => [
            "name" => "Pet Botol",
            "price" => "Rp 3.000/kg",
            "description" => "Pet Botol biasanya berasal dari botol minuman yang sudah tidak terpakai.",
            "image" => "assets/images/pet_bottle.png"
        ],
        "plastik_hdpe" => [
            "name" => "Plastik HDPE",
            "price" => "Rp 4.000/kg",
            "description" => "Plastik HDPE digunakan untuk bahan yang lebih tebal, seperti botol shampo atau sabun.",
            "image" => "assets/images/plastik_hdpe.png"
        ],
        "pp_gelas" => [
            "name" => "PP Gelas",
            "price" => "Rp 3.500/kg",
            "description" => "PP Gelas merupakan gelas plastik sekali pakai yang biasa ditemukan pada minuman.",
            "image" => "assets/images/pp_gelas.png"
        ],
        "plastik_lembaran" => [
            "name" => "Plastik Lembaran",
            "price" => "Rp 3.000/kg",
            "description" => "Plastik lembaran sering digunakan sebagai pembungkus produk seperti makanan.",
            "image" => "assets/images/plastik_lembaran.png"
        ],
        "galon_air" => [
            "name" => "Galon Air",
            "price" => "Rp 4.000/kg",
            "description" => "Galon air bekas yang sudah rusak atau tidak dapat digunakan lagi.",
            "image" => "assets/images/galon_air.png"
        ],
    
        // Logam
        "ps_kaca" => [
            "name" => "PS Kaca",
            "price" => "Rp 4.500/kg",
            "description" => "Logam jenis PS kaca sering digunakan untuk produk elektronik atau konstruksi.",
            "image" => "assets/images/ps_kaca.png"
        ],
        "aluminium_sari" => [
            "name" => "Aluminium Sari",
            "price" => "Rp 4.000/kg",
            "description" => "Aluminium sari berasal dari kemasan seperti sachet bekas minuman atau makanan.",
            "image" => "assets/images/aluminium_sari.png"
        ],
        "kaleng" => [
            "name" => "Kaleng",
            "price" => "Rp 4.200/kg",
            "description" => "Kaleng bekas minuman atau makanan sering menjadi bahan daur ulang yang berharga.",
            "image" => "assets/images/kaleng.png"
        ],
        "besi" => [
            "name" => "Besi",
            "price" => "Rp 4.000/kg",
            "description" => "Besi bekas yang biasa ditemukan pada material konstruksi.",
            "image" => "assets/images/besi.png"
        ],
        "aluminium" => [
            "name" => "Aluminium",
            "price" => "Rp 4.500/kg",
            "description" => "Logam aluminium yang berasal dari berbagai produk seperti kaleng atau peralatan dapur.",
            "image" => "assets/images/aluminium.png"
        ],
        "tembaga" => [
            "name" => "Tembaga",
            "price" => "Rp 5.000/kg",
            "description" => "Tembaga sering ditemukan pada kabel listrik atau peralatan elektronik.",
            "image" => "assets/images/tembaga.png"
        ],
        "kuningan" => [
            "name" => "Kuningan",
            "price" => "Rp 4.800/kg",
            "description" => "Kuningan biasanya digunakan pada alat musik, peralatan rumah tangga, dan komponen industri.",
            "image" => "assets/images/kuningan.png"
        ],
    
        // Kertas
        "koran" => [
            "name" => "Koran",
            "price" => "Rp 2.000/kg",
            "description" => "Kertas bekas koran yang dapat digunakan untuk berbagai kebutuhan daur ulang.",
            "image" => "assets/images/koran.png"
        ],
        "hvs" => [
            "name" => "HVS",
            "price" => "Rp 2.500/kg",
            "description" => "Kertas HVS bekas dari dokumen atau catatan yang tidak terpakai.",
            "image" => "assets/images/hvs.png"
        ],
        "dupleks" => [
            "name" => "Dupleks",
            "price" => "Rp 2.200/kg",
            "description" => "Kertas dupleks yang biasanya berasal dari kemasan atau kardus tipis.",
            "image" => "assets/images/dupleks.png"
        ],
        "kertas_buram" => [
            "name" => "Kertas Buram",
            "price" => "Rp 2.000/kg",
            "description" => "Kertas buram bekas digunakan untuk bahan daur ulang.",
            "image" => "assets/images/kertas_buram.png"
        ],
        "kantong_semen" => [
            "name" => "Kantong Semen",
            "price" => "Rp 1.800/kg",
            "description" => "Kantong semen bekas yang biasanya digunakan untuk daur ulang kertas.",
            "image" => "assets/images/kantong_semen.png"
        ],
        "kardus" => [
            "name" => "Kardus",
            "price" => "Rp 2.300/kg",
            "description" => "Kardus bekas kemasan yang dapat didaur ulang menjadi produk baru.",
            "image" => "assets/images/kardus.png"
        ],
    
        // Organik
        "jelantah" => [
            "name" => "Jelantah",
            "price" => "Rp 1.800/kg",
            "description" => "Minyak jelantah bekas pakai yang dapat diolah menjadi biodiesel atau produk lainnya.",
            "image" => "assets/images/jelantah.png"
        ],
        "sumpit_kayu" => [
            "name" => "Sumpit Kayu",
            "price" => "Rp 2.000/kg",
            "description" => "Sumpit kayu bekas yang dapat digunakan untuk pembuatan kompos atau daur ulang.",
            "image" => "assets/images/sumpit_kayu.png"
        ],
    
        // Botol
        "botol_kaca_bening" => [
            "name" => "Botol Kaca Bening",
            "price" => "Rp 3.000/kg",
            "description" => "Botol kaca bening bekas seperti botol minuman dan produk lainnya.",
            "image" => "assets/images/botol_kaca_bening.png"
        ],
        "botol_kaca_warna" => [
            "name" => "Botol Kaca Warna",
            "price" => "Rp 3.000/kg",
            "description" => "Botol kaca berwarna dari bekas produk seperti sirup atau obat.",
            "image" => "assets/images/botol_kaca_warna.png"
        ]
    ];

    public function index()
    {
        // Menampilkan daftar kategori sampah
        $jenis_sampah = $this->jenis_sampah;
        return view('sampah.index', compact('jenis_sampah'));
    }

    public function detail($item)
    {
        // Menampilkan detail item sampah
        if (array_key_exists($item, $this->items)) {
            $itemDetail = $this->items[$item];
            return view('sampah.detail', compact('itemDetail'));
        }
        return abort(404, 'Item tidak ditemukan');
    }
}
