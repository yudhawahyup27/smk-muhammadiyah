@extends('layouts.landing')
@section('title', 'Homepage')
@section('content')

<!-- Hero Section -->
<section id="hero" class="hero section dark-background">
  <div class="hero-container">
   <video autoplay muted loop playsinline class="video-background">
    <source src="{{ asset('assets/img/education/video-2.mp4') }}" type="video/mp4">
</video>
    <div class="overlay"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7" data-aos="zoom-out" data-aos-delay="100">
          <div class="hero-content">
            <h1>SMK Muhammadiyah Satu Ngadiluwih Kediri</h1>
            <p>Skills For Success, Excellence For Life</p>
            <div class="cta-buttons">
              <a href="#" class="btn-primary">Kontak Kami</a>
            </div>
          </div>
        </div>
        {{-- Tambahan bagian statistik yang dikomentari --}}
      </div>
    </div>
  </div>
</section>

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
            <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>+</span>
            <span class="stat-label">Years</span>
          </div>
          <div class="stat-box">
            <span class="stat-number">B</span>
            <span class="stat-label">Akreditasi</span>
          </div>
          <div class="stat-box">
            <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="125" data-purecounter-duration="1" class="purecounter"></span>+</span>
            <span class="stat-label">Murid Lulus</span>
          </div>
          <div class="w-100">
            <a href="#" class="btn-primary w-100 btn">Profile Kami</a>
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
<section id="featured-programs" class="featured-programs section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Program Keahlian</h2>
  </div>
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row g-4">
      <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="program-item d-flex">
          <div class="program-image-wrapper me-3">
            <img src="assets/img/siswa/siswabubut.jpg" class="img-fluid" alt="Program">
          </div>
          <div>
            <h3>Teknik Kendaraan Ringan</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            <a href="#" class="program-btn"><span>Learn More</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Students Life Section -->
<section id="students-life-block" class="students-life-block section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Ekstrakurikuler</h2>
  </div>
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row align-items-center gy-4">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="students-life-img position-relative">
          <img src="https://darunnajah.com/wp-content/uploads/2021/09/239356831_4270328436353877_914565204776560912_n-1024x683.jpg" class="img-fluid rounded-4 shadow-sm" alt="Students Life">
          <div class="img-overlay">
            <h3>Discover Campus Life</h3>
            <a href="students-life.html" class="explore-btn">Explore More <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <div class="row g-4 mb-4">
          @foreach ([
            'Hawai Pramuka' => 'Lorem ipsum...',
            'Ikatan Pelajar Muhammadiyah' => 'Quis nostrud...',
            'Tapak Suci' => 'Duis aute irure...',
            'Futsal' => 'Excepteur sint occaecat...'
          ] as $title => $desc)
            <div class="col-md-6" data-aos="zoom-in">
              <div class="student-activity-item">
                <h4>{{ $title }}</h4>
                <p>{{ $desc }}</p>
              </div>
            </div>
          @endforeach
        </div>
        <div class="students-life-cta" data-aos="fade-up">
          <a href="students-life.html" class="btn btn-primary">View All Student Activities</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Fasilitas Sekolah -->
<section id="stats" class="stats section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Fasilitas Sekolah</h2>
  </div>
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row g-4">
      @foreach ([
        ['title' => 'Lab Komputer', 'img' => 'https://smawijaya.sch.id/...', 'desc' => 'Lorem ipsum...'],
        ['title' => 'Bengkel Otomotif', 'img' => 'https://moladin.com/blog/...', 'desc' => 'Maecenas finibus...'],
        ['title' => 'Lab Kesehatan', 'img' => 'https://blogger.googleusercontent.com/...', 'desc' => 'Fusce consectetur...']
      ] as $item)
        <div class="col-md-4">
          <div class="achievement-item">
            <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}" class="img-fluid">
            <div class="achievement-content">
              <h4>{{ $item['title'] }}</h4>
              <p>{{ $item['desc'] }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
