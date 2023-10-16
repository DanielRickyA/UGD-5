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

Route::get('/presensi', function () {
    return view('Gyms/presensi', [
        'member' => [
            [
                'nama' => 'Rakai Anandhi Mahardhika',
                'email' => 'raka@gmail.com',
                'noTelp' => '081391595012',
                'metode' => 'Deposit Kelas',
                'card' => 'Gold',
            ],
            [
                'nama' => 'Daniel Ricky Alexander',
                'email' => 'Ricky@gmail.com',
                'noTelp' => '082123123123',
                'metode' => 'Deposit Uang',
                'card' => 'Silver',
            ],
            [
                'nama' => 'Agung Raynaldi Mangiri',
                'email' => 'Agung@gmail.com',
                'noTelp' => '085976456777',
                'metode' => 'Deposit Kelas',
                'card' => 'Black',
            ],
            [
                'nama' => 'Patrick nino kolin prama',
                'email' => 'patrick@gmail.com',
                'noTelp' => '089765332133',
                'metode' => 'Deposit Uang',
                'card' => 'Black',
            ],
            [
                'nama' => 'Ignatius Sodhana Tebri Artanto',
                'email' => 'Iqnatius@gmail.com',
                'noTelp' => '082456763988',
                'metode' => 'Deposit Kelas',
                'card' => 'Gold',
            ],
            [
                'nama' => 'Kevin Jonathan Wijaya',
                'email' => 'KejoWidjaya@gmail.com',
                'noTelp' => '082456311890',
                'metode' => 'Deposit Uang',
                'card' => 'Silver',
            ],
        ]
    ]);
});
