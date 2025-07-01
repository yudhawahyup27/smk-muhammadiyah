@extends('layouts.dashboard')

@section('title', 'Ekstrakulikuler')

@section('content')
<div class="">
   <a href="" class="btn btn-primary">Tambah Data Ekstrakulikuler</a>
    <div class="row mt-2">
        @foreach ([
            [
                'title' => "Tapak Suci",
                'gambar' => asset('https://persada.uad.ac.id/wp-content/uploads/WhatsApp-Image-2021-10-09-at-12.47.331-1.jpeg'),
                'pembina' => 'Yudha Wahyu Pratama',
                'jadwal' => 'Kamis, 15:30 - 17:00 WIB',
                'deskripsi' => 'Pelatihan Silat Tapak Suci Asli Silat Muhhammadiyah'
    ],
            [
                'title' => "Tapak Suci",
                'gambar' => asset('https://persada.uad.ac.id/wp-content/uploads/WhatsApp-Image-2021-10-09-at-12.47.331-1.jpeg'),
                'pembina' => 'Yudha Wahyu Pratama',
                'jadwal' => 'Kamis, 15:30 - 17:00 WIB',
                'deskripsi' => 'Pelatihan Silat Tapak Suci Asli Silat Muhhammadiyah'
            ]
        ] as $items)


<div class="col-md-4  mb-4">
            <a href="">
            <div class="card shadow-sm rounded overflow-hidden">
                <img src="{{ $items['gambar'] }}" class="img-fluid" alt="{{ $items['title'] }}">

                <div class="p-4">
                    <h4 class="fw-bold mb-3">{{ $items['title'] }}</h4>

                    <div class="d-flex mb-2 align-items-center">
                        <div class="me-3 text-success">
                            <i class="ti ti-user fs-4"></i>
                        </div>
                        <div>
                            <div class="text-muted small">Pembina</div>
                            <div class="fw-semibold">{{ $items['pembina'] }}</div>
                        </div>
                    </div>

                    <div class="d-flex mb-3 align-items-center">
                        <div class="me-3 text-success">
                            <i class="ti ti-calendar-time fs-4"></i>
                        </div>
                        <div>
                            <div class="text-muted small">Jadwal</div>
                            <div class="fw-semibold">{{ $items['jadwal'] }}</div>
                        </div>
                    </div>

                    <p class="text-muted mb-0" style="font-size: 0.95rem;">
                        {{ $items['deskripsi'] }}
                    </p>
                </div>
            </div>
        </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
