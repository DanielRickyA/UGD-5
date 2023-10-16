@extends('dashboard')

@section('content')
<div class="content">
    <div class="container pt-3">
        <div class="card t-5">
            <div class="card-body m-1">
                <div class="d-flex justify-content-start">
                    <img src="https://www.fitnessfirst.co.id/id/-/media/project/evolution-wellness/fitness-first/south-east-asia/indonesia/classes/bodycombat/bodycombat_fb-sharing.png" 
                    alt="" class="border border-black border-2" 
                    style="width: 300px; height: 200px; object-fit:cover; border-radius: 25px;">
                    <div class="ms-3 mt-2 w-100">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex ">
                                <h2>Body Combat</h2>
                                <button type="button" class="btn btn-sm btn-primary ms-2 m-0 my-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                            <h5 class="border-bottom">Tanggal : {{ date('l, d-M-Y')}}</h5>
                        </div>
                        <h5>Instruktur : Jolly Hans Frankle</h5>
                        <h5>Ruang : Kelas A</h5>
                        <h5>Total Member : 6</h5>
                        <div class="d-flex justify-content-start">
                            <h5 class="me-2">Rating : </h5>
                            <div class="mb-0 " style="color: Gold;">
                                <i class="fas fa-star fa-xs"></i>
                                <i class="fas fa-star fa-xs"></i>
                                <i class="fas fa-star fa-xs"></i>
                                <i class="fas fa-star fa-xs"></i>
                                <i class="fas fa-star fa-xs"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <hr>
        <!-- Card Member -->
        <div class="d-flex justify-content-between align-items-center mb-2 pb-2">
            <h3>Daftar Member</h3>
            <button class="btn btn-primary mb-1" id="liveToastBtn">
                <i class="fa-solid fa-check"></i> Presensi
            </button>
        </div>

        <div class="row align-items-center">
            @forelse ($member as $item)
            <div class="col-lg-4 col-md-4 col-sm-6">
                @if ($item['card'] == 'Gold')
                <div class="card border border-2 border-warning">
                    @elseif ($item['card'] == 'Silver')
                    <div class="card border border-2 border-secondary">
                        @else
                        <div class="card border border-2 border-dark">
                            @endif
                            <img src="https://mloz35cl5wye.i.optimole.com/cb:s357.4350f/w:1024/h:576/q:90/https://www.slugmag.com/wp/wp-content/uploads/2022/09/joji-salt-lake-2022.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div>
                                </div>
                                <h5 class="card-title m-0"><strong> {{$item['nama']}} </strong></h5>
                                <p class="card-text m-0">Email : {{$item['email']}}</p>
                                <p class="card-text m-0">No Telp : {{$item['noTelp']}}</p>
                                @if ($item['card'] == 'Gold')
                                <p class="card-text m-0">Jenis Kartu: <span class="badge badge-warning rounded-pill">{{$item['card']}}</span></p>
                                @elseif ($item['card'] == 'Silver')
                                <p class="card-text m-0">Jenis Kartu: <span class="badge badge-secondary rounded-pill">{{$item['card']}}</span></p>
                                @else
                                <p class="card-text m-0">Jenis Kartu: <span class="badge badge-dark rounded-pill">{{$item['card']}}</span></p>
                                @endif

                                @if ($item['metode'] == 'Deposit Kelas')
                                <p class="card-text m-0">Metode Pembayaran : <span class="badge badge-primary">{{$item['metode']}}</span></p>
                                @else
                                <p class="card-text m-0">Metode Pembayaran : <span class="badge badge-success">{{$item['metode']}}</span></p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <h3>Belum ada member yang hadir</h3>
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>

            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-body bg-primary">
                        <i class="fa-solid fa-check mx-2"></i>Berhasil Mempresensi Member
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Detail Kelas</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <table>
                                <tr>
                                    <td><strong>
                                            <h4>Body Combat</h4>
                                        </strong></td>
                                </tr>
                                <tr>
                                    <td>Nama Instruktur</td>
                                    <td>:</td>
                                    <td> Nama Kalian</td>
                                </tr>
                                <tr>
                                    <td>Kode Instruktur</td>
                                    <td>:</td>
                                    <td> NPM Kalian</td>
                                </tr>
                                <tr>
                                    <td>Hari Kelas</td>
                                    <td>:</td>
                                    <td>{{ date('l')}}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Kelas</td>
                                    <td>:</td>
                                    <td>{{ date('d-M-Y')}}</td>
                                </tr>
                                <tr>
                                    <td>Ruang</td>
                                    <td>:</td>
                                    <td>Kelas A</td>
                                </tr>
                                <tr>
                                    <td>Rating</td>
                                    <td>:</td>
                                    <td>
                                        <i class="fas fa-star fa-xs"></i>
                                        <i class="fas fa-star fa-xs"></i>
                                        <i class="fas fa-star fa-xs"></i>
                                        <i class="fas fa-star fa-xs"></i>
                                        <i class="fas fa-star fa-xs"></i>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection