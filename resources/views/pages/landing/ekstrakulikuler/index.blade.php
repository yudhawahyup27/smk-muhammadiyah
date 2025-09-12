@extends('layouts.landing')
@section('title', 'Ekstrakulikuler')
@section('content')

<div class="">


    <div class="page-title dark-background" style="background-image: url(https://images.bisnis.com/posts/2023/11/14/1714300/pramuka_1_1699953189.jpeg);">
      <div class="container position-relative">
        <h1>Ekstrakulikuler</h1>
        <p>Di SMK Muhammadiyah, kami hadirkan ekstrakurikuler pilihan untuk mengasah bakat dan spiritualmu, mempersiapkan diri menjadi insan berakhlak mulia dan profesional. Bersama kami, kembangkan potensi terbaikmu dan raih masa depan cemerlang dengan landasan iman yang kuat.
            </p>
      </div>
    </div>

    <div class="container my-4">
          <div class="row g-4">
        @forelse ($ekstras as $items)
        <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card border-0 shadow-sm h-100 hover-card">
                <!-- Image Section -->
                <div class="position-relative overflow-hidden" style="height: 250px;">
                    @if($items->gambar)
                        <img src="{{ asset(  $items->gambar) }}"
                             class="img-fluid w-100 h-100 object-fit-cover"
                             alt="{{ $items->nama }}">
                        {{-- <img src="{{ asset('storage/app/public/' . $items->gambar) }}"
                             class="img-fluid w-100 h-100 object-fit-cover"
                             alt="{{ $items->nama }}"> --}}
                    @else
                        <div class="w-100 h-100 bg-light d-flex align-items-center justify-content-center">
                            <div class="text-center text-muted">
                                <i class="ti ti-photo fs-1 mb-2"></i>
                                <p class="mb-0">No Image</p>
                            </div>
                        </div>
                    @endif

                    <!-- Overlay for better text readability -->
                    <div class="position-absolute top-0 start-0 w-100 h-100  opacity-10"></div>

                    <!-- Category Badge -->
                    <div class="position-absolute top-0 end-0 m-3">
                        <span class="badge bg-primary bg-opacity-90 px-3 py-2 rounded-pill">
                          <i class="bi bi-star-fill me-2"></i>Ekstrakurikuler
                        </span>
                    </div>
                </div>

                <!-- Card Body -->
                <div class="card-body p-4 d-flex flex-column">
                    <!-- Title -->
                    <h4 class="fw-bold mb-3 text-dark">{{ $items->nama }}</h4>

                    <!-- Schedule Info -->
                    <div class="d-flex align-items-center mb-3 p-3 bg-light rounded-3">
                        <div class="me-3 text-primary">
                          <i class="bi bi-calendar-date fs-4"></i>
                        </div>
                        <div>
                            <div class="text-muted small mb-1">Jadwal Kegiatan</div>
                            <div class="fw-semibold text-dark">{{ $items->jadwal }}</div>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="text-muted mb-4 flex-grow-1" style="line-height: 1.6;">
                        {!! $items->deskripsi !!}
                    </p>


                </div>
            </div>
        </div>
        @empty
        <!-- Empty State -->
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center py-5">
                    <div class="mb-4">
                        <i class="ti ti-folder-open text-muted" style="font-size: 4rem;"></i>
                    </div>
                    <h4 class="text-muted mb-3">Belum Ada Data Ekstrakurikuler</h4>
                    <p class="text-muted mb-4">Mulai dengan menambahkan ekstrakurikuler pertama untuk sekolah Anda</p>
                    <a href="{{ route('dashboards.ekstra.manage') }}" class="btn btn-primary">
                        <i class="ti ti-plus me-2"></i>Tambah Ekstrakurikuler
                    </a>
                </div>
            </div>
        </div>
        @endforelse
    </div>
    </div>
    </div>


    <style>
.hover-card {
    transition: all 0.3s ease;
    border-radius: 12px !important;
}

.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1) !important;
}

.object-fit-cover {
    object-fit: cover;
}

.card {
    border-radius: 12px;
}

.btn {
    border-radius: 8px;
    font-weight: 500;
}

.btn-primary {
    background: linear-gradient(45deg, #007bff, #0056b3);
    border: none;
}

.btn-primary:hover {
    background: linear-gradient(45deg, #0056b3, #004085);
    transform: translateY(-1px);
}

.btn-outline-warning:hover {
    transform: translateY(-1px);
}

.btn-outline-danger:hover {
    transform: translateY(-1px);
}

.badge {
    font-size: 0.75rem;
    font-weight: 500;
}

.bg-light {
    background-color: #f8f9fa !important;
}

.text-dark {
    color: #212529 !important;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .btn-lg {
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
    }

    .card-body {
        padding: 1rem !important;
    }

    .hover-card:hover {
        transform: none;
    }
}
</style>
@endsection
