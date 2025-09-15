@extends('layouts.landing')
@section('title', 'Homepage')
@section('content')

<!-- Hero Section -->
<section id="profile" class="hero section dark-background">
  <div class="hero-container">
    <img src="{{ asset('assets/img/fotosekolah.jpeg') }}" alt="Foto Sekolah">
    {{-- <video autoplay muted loop playsinline class="video-background">
      <source src="{{ asset('assets/profileSMK.mp4') }}" type="video/mp4">
    </video> --}}
    <div class="overlay"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7" data-aos="zoom-out" data-aos-delay="100">
          <div class="hero-content">
            <h1>SMK Muhammadiyah Ngadiluwih Kediri</h1>
            <p>{{ $profile->slogan }}</p>
            <div class="cta-buttons">
              <a href="https://api.whatsapp.com/send?phone={{ $profile->telepon }}&text=Assallamualaikum%20wr%20wb%2C%20admin%20Smk%20muhammadiyah%20Kediri"
                 class="btn-primary">Kontak Kami</a>
            </div>
          </div>
        </div>
        {{-- Statistik --}}
      </div>
    </div>
  </div>
</section>

@php
    use Carbon\Carbon;
    $tahunBerdiri = $profile->tahun_berdiri;
    $tahunSekarang = Carbon::now()->year;
    $jumlahTahun = $tahunSekarang - $tahunBerdiri;
@endphp

<!-- About Section -->
<section id="about" class="about section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row mb-5">
      <div class="col-lg-6 pe-lg-5" data-aos="fade-right" data-aos-delay="200">
        <h2 class="fw-bold mb-4">Raih Masa Depan Gemilang Bersama SMK Muhammadiyah Kediri!</h2>
        <h3>Pintu Kesuksesan Ada di Tanganmu!</h3>
        <p class="lead mb-4">Selamat datang di SMK Muhammadiyah Kediri, sekolah kejuruan terdepan...</p>
        <div class="d-flex flex-wrap gap-4 mb-4">
          <div class="stat-box">
            <span class="stat-number">
              <span data-purecounter-start="0" data-purecounter-end="{{ $jumlahTahun }}" data-purecounter-duration="1" class="purecounter"></span>+
            </span>
            <span class="stat-label">Years</span>
          </div>
          <div class="stat-box">
            <span class="stat-number">{{ $profile->akreditasi }}</span>
            <span class="stat-label">Akreditasi</span>
          </div>
          <div class="stat-box">
            <span class="stat-number">
              <span data-purecounter-start="0" data-purecounter-end="125" data-purecounter-duration="1" class="purecounter"></span>+
            </span>
            <span class="stat-label">Murid Lulus</span>
          </div>
          <div class="w-100">
            <a href="#profile" class="btn-primary w-100 btn">Profile Kami</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
        <div class="image-stack">
          <div class="image-stack-item image-stack-item-top" data-aos="zoom-in" data-aos-delay="400">
            <img src="{{ asset('assets/img/siswa.png') }}" alt="Students" class="img-fluid rounded-4 shadow-lg">
          </div>
          <div class="image-stack-item image-stack-item-bottom" data-aos="zoom-in" data-aos-delay="500">
            <img src="{{ asset('assets/img/fotosekolah.jpeg') }}" alt="Campus Life" class="img-fluid rounded-4 shadow-lg">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Featured Programs Section -->
<section id="jurusan" class="featured-programs section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Program Keahlian</h2>
  </div>
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row g-4">
        @foreach ($jurusan as $jur)
        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="program-item d-flex h-100">
            <div class="col-4 program-image-wrapper me-3">
              <img src="{{ asset('storage/'.$jur->gambar) }}" class="img-fluid rounded" alt="Program {{ $jur->nama }}">
            </div>
            <div class="flex-fill">
              <h3 class="mb-2">{{ $jur->nama }}</h3>
              <p class="mb-0 text-muted">{!! Str::limit($jur->deskripsi, 200) !!}</p>
            </div>
          </div>
        </div>
        @endforeach
    </div>
  </div>
</section>

<!-- Students Life Section -->
<section id="ekskul" class="students-life-block section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Ekstrakurikuler</h2>
  </div>
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row align-items-center gy-4">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="students-life-img position-relative">
          {{-- Ganti dengan gambar lokal jika sudah ada --}}
          <img src="{{ asset('assets/img/ekskul.jpg') }}" class="img-fluid rounded-4 shadow-sm" alt="Students Life">
          <div class="img-overlay">
            <h3>Discover Ekstrakulikuler</h3>
            <a href="/ekstrakulikuler" class="explore-btn">Explore More <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <div class="row g-4 mb-4">
          @foreach ($ekstras as $e)
            <div class="col-md-6" data-aos="zoom-in">
              <div class="student-activity-item">
                <h4>{{ $e->nama }}</h4>
                <div>
                  <div class="text-muted small mb-1">Jadwal Kegiatan</div>
                  <div class="fw-semibold text-dark">{{ $e->jadwal }}</div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="students-life-cta" data-aos="fade-up">
          <a href="/ekstrakulikuler" class="btn btn-primary">View All Student Activities</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Fasilitas Sekolah -->
<section id="fasilitas" class="facilities section py-5">
  <div class="container">
    <div class="row g-4" data-aos="fade-up" data-aos-delay="100">
      @foreach ($fasilitas as $item)
        <div class="col-lg-4 col-md-6" data-aos="fade-up">
          <div class="facility-card h-100">
            <div class="facility-image">
              @if($item->gambar)
                <img src="{{ asset('storage/'.$item->gambar) }}" alt="{{ $item->nama }}" class="img-thumbnail"/>
              @else
                <img src="{{ asset('assets/img/no-image.png') }}" alt="No Image" class="img-thumbnail"/>
              @endif
            </div>
            <div class="facility-content">
              <h4 class="facility-title">{{ $item->nama }}</h4>
              <p class="facility-description">{!! $item->deskripsi !!}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
