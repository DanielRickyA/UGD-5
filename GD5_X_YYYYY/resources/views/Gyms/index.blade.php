@extends('Dashboard')

@section('content')
<!-- Main content -->
<style>
    .gambar {
        height: 100px;
        border-radius: 100px;
        border: 1px solid black;
        background-image: none;
    }

    .gambarKelas {
        width: 300px;
    }
</style>
<div class="content">
    <div class="container-fluid">

        <h1>Gofit Analysis</h1>
        <div class="row align-items-center mt-3">
            <!-- Colom 1 -->
            <div class="col-md-3 col-sm-6">
                <div class="card p-0 mx-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img class="gambar p-1 me-2" src="https://cdn3.iconfinder.com/data/icons/online-user/120/user-1-512.png" alt="">
                            <div class="text-start mt-3">
                                <p class="m-0">Total Member</p>
                                <h4>100</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Colom 2 -->
            <div class="col-md-3 col-sm-6">
                <div class="card p-0 mx-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img class="gambar p-3 me-2" src="https://w7.pngwing.com/pngs/630/420/png-transparent-personal-trainer-physical-fitness-computer-icons-exercise-fitness-centre-house-child-icon-physical-fitness-text-logo.png" alt="">
                            <div class="text-start mt-3">
                                <p class="m-0">Jumlah Trainer</p>
                                <h4>20</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Colom 3 -->
            <div class="col-md-3 col-sm-6">
                <div class="card p-0 mx-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img class="gambar p-3 me-2" src="https://png.pngtree.com/png-vector/20191128/ourmid/pngtree-coin-money-icon-png-image_2049478.jpg" alt="">
                            <div class="text-start mt-3">
                                <p class="m-0">Pendapatan</p>
                                <h4>Rp 3.000.000</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Colom 4 -->
            <div class="col-md-3 col-sm-6">
                <div class="card p-0 mx-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img class="gambar p-3 me-2" src="https://www.iconpacks.net/icons/2/free-rating-star-icon-2793-thumb.png" alt="">
                            <div class="text-start mt-3">
                                <p class="m-0">Rating</p>
                                <h4>
                                    <ul class="mb-0 list-unstyled d-flex flex-row" style="color: Gold;">
                                        <li>
                                            <i class="fas fa-star fa-xs"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star fa-xs"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star fa-xs"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star fa-xs"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star-half fa-xs"></i>
                                        </li>
                                    </ul>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- row -->
        </div>
        <div>
            <h1 class="mb-3">Gofit Promo</h1>
            <div class="row mb-3">
                @forelse ($promo as $item)
                <div class="col-lg-4 col-md-4 col-sm-6 mb-3">
                    <div class="card h-100 mb-4">
                        <h4 class="card-header bg-secondary">{{$item['nama']}}</h4>
                        <div class="card-body">
                            <p class="card-title m-0"><strong>Jenis Promo</strong>: {{$item['jenis']}}</p>
                            <p class="card-text m-0"><strong>Minimal Pembelian</strong>: {{$item['minimal']}} </p>
                            <p class="card-text m-0"><strong>bonus</strong>: {{$item['bonus']}} </p>
                            <p class="card-text m-0"><strong>Isi Promo</strong>:</p>
                            <p class="card-text m-0">{{$item['isi']}} </p>

                        </div>
                    </div>
                </div>
                @empty
                <div class="alert alert-danger">
                    Data Promo masi kosong
                </div>
                @endforelse
            </div>
        </div>
        <h1>Fasilitas Kelas Gofit</h1>
        <table class="table table-striped border-dark text-center">
            <tr class="">
                <th>No</th>
                <th>Gambar</th>
                <th>Nama Fasilitas</th>
                <th>Instruktur</th>
                <th>Ruang</th>
                <th>Rating</th>
            </tr>
            @forelse ($kelas as $item)
            <tr>
                <td>{{ $item['no'] }} </td>
                <td><img class="gambarKelas rounded" src="{{ $item['gambar'] }}" alt=""></td>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['instruktur']}}</td>
                <td>{{ $item['ruang'] }}</td>
                <td>
                    @if ($item['rating'] == 5)
                    <div class="mb-0 " style="color: black;">
                        <i class="fas fa-star fa-xs"></i>
                        <i class="fas fa-star fa-xs"></i>
                        <i class="fas fa-star fa-xs"></i>
                        <i class="fas fa-star fa-xs"></i>
                        <i class="fas fa-star fa-xs"></i>
                    </div>
                    @elseif ($item['rating'] == 4)
                    <div class="mb-0 " style="color: black;">
                        <i class="fas fa-star fa-xs"></i>
                        <i class="fas fa-star fa-xs"></i>
                        <i class="fas fa-star fa-xs"></i>
                        <i class="fas fa-star fa-xs"></i>
                    </div>
                    @elseif ($item['rating'] == 3)
                    <div class="mb-0 " style="color: black;">
                        <i class="fas fa-star fa-xs"></i>
                        <i class="fas fa-star fa-xs"></i>
                        <i class="fas fa-star fa-xs"></i>
                    </div>
                    @endif
                </td>
            </tr>
            @empty
            <div class="alert alert-danger">
                Data Kelas masi kosong
            </div>
            @endforelse
        </table>
    </div>

</div>
@endsection