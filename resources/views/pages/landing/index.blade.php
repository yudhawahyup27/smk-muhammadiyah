@extends('layouts.landing')
@section('title', 'Homepage')
@section('content')


<!-- Hero Section -->
<section id="profile" class="hero section dark-background">
  <div class="hero-container">
    {{-- <img src="{{ asset('/assets/img/fotosekolah.jpeg') }}" alt=""> --}}
   <video autoplay muted loop playsinline class="video-background">
   <source src="{{ asset('assets/profileSMK.mp4') }}" type="video/mp4">
</video>
    <div class="overlay"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7" data-aos="zoom-out" data-aos-delay="100">
          <div class="hero-content">
            <h1>SMK Muhammadiyah Ngadiluwih Kediri</h1>
            <p>{{ $profile->slogan }}</p>
            <div class="cta-buttons">
              <a href="https://api.whatsapp.com/send?phone={{ $profile->telepon }}&text=Assallamualaikum%20wr%20wb%2C%20admin%20Smk%20muhammadiyah%20Kediri" class="btn-primary">
    Kontak Kami
</a>

            </div>
          </div>
        </div>
        {{-- Tambahan bagian statistik yang dikomentari --}}
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
            <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="{{ $jumlahTahun }} " data-purecounter-duration="1" class="purecounter"></span>+</span>
            <span class="stat-label">Years</span>
          </div>
          <div class="stat-box">
            <span class="stat-number">{{ $profile->akreditasi }}</span>
            <span class="stat-label">Akreditasi</span>
          </div>
          <div class="stat-box">
            <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="125" data-purecounter-duration="1" class="purecounter"></span>+</span>
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
            <img src="assets/img/siswa.png" alt="Students" class="img-fluid rounded-4 shadow-lg">
          </div>
          <div class="image-stack-item image-stack-item-bottom" data-aos="zoom-in" data-aos-delay="500">
            <img src="assets/img/fotosekolah.jpeg" alt="Campus Life" class="img-fluid rounded-4 shadow-lg">
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
        @foreach ( $jurusan as $jur)
        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="program-item d-flex h-100">
            <div class="col-4 program-image-wrapper me-3">
              <img src="{{ asset('storage/app/public/' . $jur->gambar) }}" class="img-fluid rounded" alt="Program {{ $jur->nama }}">
              {{-- <img src="{{ asset('storage/app/public/' .'storage/app/public/' . $jur->gambar) }}" class="img-fluid rounded" alt="Program {{ $jur->nama }}"> --}}
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
          <img src="https://darunnajah.com/wp-content/uploads/2021/09/239356831_4270328436353877_914565204776560912_n-1024x683.jpg" class="img-fluid rounded-4 shadow-sm" alt="Students Life">
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
    <!-- Section Title -->
    <div class="row mb-5" data-aos="fade-up">
      <div class="col-12 text-center">
        <div class="section-title">
          <span class="badge bg-primary text-white px-3 py-2 rounded-pill mb-3">
            <i class="fas fa-building me-2"></i>Fasilitas Unggulan
          </span>
          <h2 class="display-4 fw-bold mb-3">Fasilitas Sekolah</h2>
          <p class="lead text-muted mb-0">Dilengkapi dengan fasilitas modern dan terlengkap untuk mendukung pembelajaran yang optimal</p>
        </div>
      </div>
    </div>

    <!-- Facilities Grid -->
    <div class="row g-4" data-aos="fade-up" data-aos-delay="100">
      @foreach ($fasilitas as $item)
        <div class="col-lg-4 col-md-6" data-aos="fade-up ">
          <div class="facility-card h-100">
            <div class="facility-image">
               @if($item->gambar)
                                <img src="{{ asset('storage/app/public/' .$item->gambar) }}" alt="Gambar" class="img-thumbnail"  />
                                {{-- <img src="{{ asset('storage/app/public/' .'storage/app/public/' . $item->gambar) }}" alt="Gambar" class="img-thumbnail"  /> --}}
                            @else
                                -
                            @endif
              <div class="facility-overlay">
                <div class="facility-icon">
                </div>
              </div>
            </div>
            <div class="facility-content">
              <h4 class="facility-title">{{ $item->nama }}</h4>
              <p class="facility-description">{!! $item->deskripsi !!}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>

<style>
/* Facilities Section Styles */
.facilities {
  background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
  position: relative;
  overflow: hidden;
}

.facilities::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="%23dee2e6" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
  opacity: 0.1;
}

.section-title {
  position: relative;
  z-index: 2;
}

.section-title .badge {
  font-size: 0.9rem;
  letter-spacing: 0.5px;
  box-shadow: 0 2px 10px rgba(0,123,255,0.2);
}

.facility-card {
  background: white;
  border-radius: 20px;
  box-shadow: 0 5px 25px rgba(0,0,0,0.1);
  transition: all 0.3s ease;
  overflow: hidden;
  position: relative;
}

.facility-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

.facility-image {
  position: relative;
  height: 200px;
  overflow: hidden;
}

.facility-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.facility-card:hover .facility-image img {
  transform: scale(1.1);
}

.facility-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(135deg, rgba(0,123,255,0.8), rgba(40,167,69,0.8));
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.facility-card:hover .facility-overlay {
  opacity: 1;
}

.facility-icon {
  background: white;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  color: #007bff;
  transform: scale(0.8);
  transition: transform 0.3s ease;
}

.facility-card:hover .facility-icon {
  transform: scale(1);
}

.facility-content {
  padding: 25px;
}

.facility-title {
  font-size: 1.3rem;
  font-weight: 600;
  margin-bottom: 10px;
  color: #2c3e50;
}






<style>
    .featured-programs {
  padding: 60px 0;
}

.section-title h2 {
  text-align: center;
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 20px;
  color: #333;
}

.program-item {
  background: #fff;
  border-radius: 15px;
  padding: 30px;
  box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
  border: 1px solid #f0f0f0;
}

.program-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.program-image-wrapper {
  min-width: 120px;
  max-width: 150px;
}

.program-image-wrapper img {
  width: 100%;
  height: 100px;
  object-fit: cover;
  border-radius: 10px;
}

.program-item h3 {
  color: #333;
  font-size: 1.4rem;
  font-weight: 600;
  line-height: 1.3;
}

.program-item p {
  color: #666;
  font-size: 0.95rem;
  line-height: 1.6;
}

/* Responsive */
@media (max-width: 768px) {
  .program-item {
    padding: 20px;
  }

  .program-image-wrapper {
    min-width: 80px;
    max-width: 100px;
  }

  .program-image-wrapper img {
    height: 80px;
  }

  .program-item h3 {
    font-size: 1.2rem;
  }

  .program-item p {
    font-size: 0.9rem;
  }
}
</style>

</section>

@endsection
