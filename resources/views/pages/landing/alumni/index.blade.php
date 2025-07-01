@extends('layouts.landing')

@section('title','Alumni')
@section('content')
    <div class="page-title dark-background" style="background-image: url(assets/img/education/showcase-1.webp);">
      <div class="container position-relative">
        <h1>Alumni</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Alumni</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Alumni Section -->
    <section id="alumni" class="alumni section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="alumni-hero">
          <div class="row align-items-center">
            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
              <div class="hero-content">
                <span class="alumni-badge">Alumni Community</span>
                <h2>Ikut Menjadi Bagian Alumni Kami</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempus, velit vel fringilla venenatis, urna risus volutpat nisi, ac commodo dolor nulla quis lorem. In mattis dictum malesuada.</p>
                <div class="alumni-metrics">
                  <div class="metric">
                    <div class="counter">35k+</div>
                    <div class="label">Telah Melulus Kan</div>
                  </div>
                  <div class="metric">
                    <div class="counter">142</div>
                    <div class="label">BerKuliah</div>
                  </div>
                  <div class="metric">
                    <div class="counter">142</div>
                    <div class="label">BerKerja</div>
                  </div>
                </div>
                {{-- <a href="#" class="btn btn-discover">Discover Network Benefits</a> --}}
              </div>
            </div>
            <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="300">
              <div class="hero-image-wrapper">
                <div class="hero-image">
                  <img src="assets/img/education/campus-5.webp" alt="Alumni Network" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="notable-alumni">
          <div class="section-header text-center" data-aos="fade-up" data-aos-delay="200">
            <h3>Notable Alumni Spotlights</h3>
            <p>Extraordinary graduates making an impact in their fields</p>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="alumni-profile">
                <div class="profile-header">
                  <div class="profile-img">
                    <img src="assets/img/person/person-f-3.webp" alt="Alumni" class="img-fluid">
                  </div>
                  <div class="profile-year">2024</div>
                </div>
                <div class="profile-body">
                  <h4>Nur Khotimah</h4>
                  <span class="profile-title">Politeknik Negeri Malang</span>
                  <p class="text-capitalize">Saya senang Sebagai Lulusan Alumni SMK Muhammadiyah Ngadiluwih Kediri karena ilmu yang barokah saya bisa masuk ke kampus impian saya</p>
                  <a href="#" class="btn-view-profile">View Profile <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>

            <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="600">
            <a href="#" class="btn-explore">Explore More Alumni Stories</a>
          </div>

        </div>



      </div>

    </section><!-- /Alumni Section -->
@endsection
