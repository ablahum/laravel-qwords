<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('', function () {
    $hosting_datas = [
        [
            "title" => "VCH1",
            "spec" => "Value Cloud Hosting",
            "price_before" => "24.500",
            "price_after" => "14.500",
            "desc" => [
                "disk" => "3GB",
                "bandwidth" => "Unlimited",
                "cpu" => "0.5 Core",
                "addon" => "No"
            ]
        ],
        [
            "title" => "Signature",
            "spec" => "Unimited Hosting",
            "price_before" => "109.000",
            "price_after" => "89.900",
            "desc" => [
                "disk" => "Unlimited",
                "bandwidth" => "Unlimited",
                "cpu" => "1 Core",
                "addon" => "5/5"
            ]
        ],
        [
            "title" => "HPCH Bisnis 1",
            "spec" => "High Performance",
            "price_before" => "90.000",
            "price_after" => "79.000",
            "desc" => [
                "disk" => "3GB",
                "bandwidth" => "Unlimited",
                "cpu" => "1 Core",
                "addon" => "No"
            ]
        ],
        [
            "title" => "VPS SC1",
            "spec" => "Cloud VPS KVM SSD",
            "price_before" => "135.000",
            "price_after" => "75.000",
            "desc" => [
                "disk" => "3GB",
                "bandwidth" => "Unlimited",
                "cpu" => "1 Core",
                "addon" => "Unlimited"
            ]
        ],
    ];

    $service_datas = [
        [
            "image" => "assets/ssl.webp",
            "title" => "SSL",
            "desc" => "Jadikan website Anda lebih terpercaya dan disukai oleh search engine dengan menggunakan SSL Certificate.",
            "price" => "112.000",
            "price_range" => "/ tahun"
        ],
        [
            "image" => "assets/ssl.webp",
            "title" => "Dedicated Server",
            "desc" => "Nikmati kelola Dedicated Server sendiri dengan akses remote dari seluruh dunia tanpa batas.",
            "price" => "449.000",
            "price_range" => "/ bulan"
        ],
        [
            "image" => "assets/disk.webp",
            "title" => "Colocation Server",
            "desc" => "Akses cepat dari seluruh dunia dengan fasilitas 24x7 full monitoring dengan cooling system terbaik serta fire extinguisher.",
            "price" => "500.000",
            "price_range" => "/ bulan"
        ],
    ];

    $solution_datas = [
        [
            "title" => "Perusahaan",
            "desc" => "Wujudkan website perusahaan profesional dan berkelas dengan dukungan web hosting terbaik dan fitur keamanan ekstra",
            "image" => "assets/company.webp"
        ],
        [
            "title" => "UMKM dan Toko Online",
            "desc" => "Memberikan hosting terbaik untuk mendukung kebutuhan website pemasaran barang/jasa secara online",
            "image" => "assets/umkm.webp"
        ],
        [
            "title" => "Organisasi dan Komunitas",
            "desc" => "Bikin website organisasi atau komunitas Anda dengan paket hosting unggulan yang ramah kantong.            ",
            "image" => "assets/orgs.webp"
        ],
        [
            "title" => "Sekolah",
            "desc" => "Infrastruktur web hosting terbaik untuk menunjang kegiatan e-learning. Didukung platform MOODLE khusus pembelajaran daring",
            "image" => "assets/school.webp"
        ],
        [
            "title" => "Developer",
            "desc" => "Tersedia paket hosting Indonesia dengan spesifikasi khusus yang dev-friendly. Ekstra NodeJS dan Git Version Control",
            "image" => "assets/dev.webp"
        ],
        [
            "title" => "Blogger dan Personal",
            "desc" => "Memfasilitasi blogger dengan infrastruktur hosting Indonesia terbaik serta template website premium untuk tampil lebih profesional            ",
            "image" => "assets/blog.webp"
        ],
    ];

    return view('index', [
        "hosting_datas" => $hosting_datas,
        "service_datas" => $service_datas,
        "solution_datas" => $solution_datas
    ]);
});
