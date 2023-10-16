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

Route::get('/', function () {
    return view('Login');
});

Route::get('/dashboard', function () {
    return view('Dashboard');
});

Route::get('/gyms', function () {
    return view('Gyms/index', [
        'kelas' => [
            [
                'no' => 1,
                "gambar" => "https://www.fitnessfirst.co.id/id/-/media/project/evolution-wellness/fitness-first/south-east-asia/indonesia/classes/bodycombat/bodycombat_fb-sharing.png",
                "nama" => "Body Combat",
                'instruktur' => 'Jolly',
                'ruang' => 'Kelas A',
                'rating' => '5'
            ],
            [
                'no' => 2,
                'gambar' => 'https://media.tacdn.com/media/attractions-splice-spp-674x446/06/dc/83/bc.jpg',
                'nama' => 'Bungee ',
                'instruktur' => 'Agung',
                'ruang' => 'Kelas B',
                'rating' => '3',
            ],
            [
                'no' => 3,
                'gambar' => 'https://fitbod.me/wp-content/uploads/2021/07/yoga-and-the-gym-on-the-same-day.jpg',
                'nama' => 'Yogalates ',
                'instruktur' => 'Raka',
                'ruang' => 'Kelas C',
                'rating' => '4',
            ],
            [
                'no' => 4,
                'gambar' => 'https://res.cloudinary.com/display97/image/upload/7930/boxing2-224119.jpeg',
                'nama' => 'Boxing ',
                'instruktur' => 'Tebri',
                'ruang' => 'Kelas D',
                'rating' => '5',
            ]
        ]
    ]);
});

Route::get('/gymspresensi', function () {
    return view('Gyms/presensi');
});

Route::get('/gymspresensi', function () {
    $nama = "Body Combat";
    $instruktur = "Joanna";
    $kode = "210711117";
    $ruang = "Kelas B";
    $total = "6";
    $rating = "5";

    $memberData = [
        [
            "gambar" => "https://2.bp.blogspot.com/-nnbE8H2Bnas/XELNhoEUj_I/AAAAAAAAyS0/OblPIXXcZ8ch4QS3rFe0YIWDP6MVkI8WACLcBGAs/s1600/kai.jpg",
            "nama" => "Ainsley",
            'email' => 'ainsley@gmail.com',
            'no' => '081298374637',
            'jenis' => 'Gold',
            'pembayaran' => 'Deposit Kelas',
        ],
        [
            "gambar" => "https://www.allkpop.com/upload/2018/09/af_org/14025241/Kai.jpg",
            "nama" => "Bratajaya",
            'email' => 'bratajaya@gmail.com',
            'no' => '083746787643',
            'jenis' => 'Silver',
            'pembayaran' => 'Deposit Uang',
        ],
        [
            "gambar" => "https://2.bp.blogspot.com/-nnbE8H2Bnas/XELNhoEUj_I/AAAAAAAAyS0/OblPIXXcZ8ch4QS3rFe0YIWDP6MVkI8WACLcBGAs/s1600/kai.jpg",
            "nama" => "Cashel",
            'email' => 'cashel@gmail.com',
            'no' => '086754434567',
            'jenis' => 'Black',
            'pembayaran' => 'Deposit Kelas',
        ],
        [
            "gambar" => "https://www.allkpop.com/upload/2018/09/af_org/14025241/Kai.jpg",
            "nama" => "Dylan",
            'email' => 'dylan@gmail.com',
            'no' => '089776543212',
            'jenis' => 'Black',
            'pembayaran' => 'Deposit Uang',
        ],
        [
            "gambar" => "https://2.bp.blogspot.com/-nnbE8H2Bnas/XELNhoEUj_I/AAAAAAAAyS0/OblPIXXcZ8ch4QS3rFe0YIWDP6MVkI8WACLcBGAs/s1600/kai.jpg",
            "nama" => "Elvano",
            'email' => 'elvano@gmail.com',
            'no' => '087799885674',
            'jenis' => 'Gold',
            'pembayaran' => 'Deposit Kelas',
        ],
        [
            "gambar" => "https://www.allkpop.com/upload/2018/09/af_org/14025241/Kai.jpg",
            "nama" => "Fransisco",
            'email' => 'fransisco@gmail.com',
            'no' => '081298374637',
            'jenis' => 'Silver',
            'pembayaran' => 'Deposit Uang',
        ]
    ];

    return view('Gyms/presensi', compact('nama', 'instruktur', 'kode', 'ruang', 'total', 'rating', 'memberData'));
});
