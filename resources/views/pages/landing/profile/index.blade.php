@extends('layouts.landing')

@section('title','Profile')
@section('content')

@php
    use Carbon\Carbon;
    $tahunBerdiri = $profile->tahun_berdiri;
    $tahunSekarang = Carbon::now()->year;
    $jumlahTahun = $tahunSekarang - $tahunBerdiri;
@endphp
    <!-- Profile Sekolah Section -->
<div class="mt-6">
    <div class="page-title dark-background" style="background-image: url(assets/img/education/showcase-1.webp);">
  <div class="container position-relative">
    <h1>Profile</h1>

  </div>
</div>
    <section id="profile" class="profile-section py-5 mt-10">
  <div class="container">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="profile-image">
     <img src="{{ asset('/assets/img/fotosekolah.jpeg') }}"

               alt="{{ $profile->name }}" class="img-cover w-100 h-50 rounded-4 shadow-lg">
          <div class="profile-badge">
            <i class="fas fa-graduation-cap"></i>
            <span>Est. {{ $profile->tahun_berdiri }}</span>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <div class="profile-content">
          <div class="section-badge">
            <i class="fas fa-school me-2"></i>
            <span>Profil Sekolah</span>
          </div>
          <h2 class="profile-title text-white">{{ $profile->name }}</h2>
          <p class="profile-subtitle">{{ $profile->slogan }}</p>
          <p class="profile-description">
           {{ $profile->alamat }}
          </p>
          <div class="profile-stats">
            <div class="stat-item">
              <div class="stat-number">{{  $jumlahTahun }}</div>
              <div class="stat-label">Tahun Berpengalaman</div>
            </div>
            <div class="stat-item">
              <div class="stat-number">5000+</div>
              <div class="stat-label">Alumni Sukses</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Visi Misi Section -->
<section id="visi-misi" class="visi-misi-section py-5">
  <div class="container">
    <!-- Section Header -->
    <div class="row mb-5" data-aos="fade-up">
      <div class="col-12 text-center">
        <div class="section-header">
          <span class="badge bg-primary text-white px-4 py-2 rounded-pill mb-3">
            <i class="fas fa-bullseye me-2"></i>Visi & Misi
          </span>
          <h2 class="section-title">Visi dan Misi Sekolah</h2>
          <p class="section-subtitle">Komitmen kami dalam membentuk generasi yang unggul dan berkarakter</p>
        </div>
      </div>
    </div>

    <div class="row g-4">
      <!-- Visi -->
      <div class="col-12" data-aos="fade-up" data-aos-delay="100">
        <div class="visi-card">
          <div class="card-content">
            <h3 class="card-title">Visi</h3>
            <div class="card-description">
              <p>
               {!! $profile->visi !!}
              </p>
            </div>

          </div>
        </div>
      </div>

      <!-- Misi -->
      <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
        <div class="misi-card">

          <div class="card-content">
            <h3 class="card-title">Misi</h3>
           <div class="misi">
            <p>{!! $profile->misi !!}</p>
           </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Sejarah Singkat Section -->
<section id="sejarah" class="sejarah-section py-5">
  <div class="container">
    <div class="row">
      <div class="col-12" data-aos="fade-up">
        <div class="sejarah-card">
          <div class="row align-items-center">
            <div class="col-lg-4">
              <div class="sejarah-icon">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlXUTA2h0BtayRbC7l2LFvzD0MPb0anUyR6G7ZAlGk9Zh6GI1QJM9fg1rzW1jqAqp4Gr0&usqp=CAU" alt="">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="sejarah-content">
                <h3 class="sejarah-title text-white">Sejarah Singkat</h3>
                <p class="sejarah-text">
                  {!! $profile->sejarah !!}
                </p>
                <div class="timeline-highlight">
                  <div class="timeline-item">
                    <span class="year">{{ $profile->tahun_berdiri }}</span>
                    <span class="event">Didirikan</span>
                  </div>
                  <div class="timeline-item">
                    <span class="year">Akreditasi</span>
                    <span class="event">{{ $profile->akreditasi }}</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>
<style>
/* Profile Section */
.profile-section {
  background: linear-gradient(135deg, #667eea 0%, #0876ff 100%);
  color: white;
  position: relative;
  overflow: hidden;
}

.profile-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></svg>');
  background-size: 50px 50px;
}

.profile-image {
  position: relative;
}

.profile-image img {
  border-radius: 20px;
  transition: transform 0.3s ease;
}

.profile-image:hover img {
  transform: scale(1.02);
}

.profile-badge {
  position: absolute;
  top: 20px;
  right: 20px;
  background: rgba(255,255,255,0.95);
  color: #667eea;
  padding: 10px 20px;
  border-radius: 50px;
  font-weight: 600;
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.profile-badge i {
  margin-right: 8px;
}

.section-badge {
  background: rgba(255,255,255,0.2);
  color: white;
  padding: 8px 16px;
  border-radius: 25px;
  font-size: 0.9rem;
  margin-bottom: 20px;
  display: inline-block;
}

.profile-title {
  font-size: 3rem;
  font-weight: 700;
  margin-bottom: 10px;
  line-height: 1.2;
}

.profile-subtitle {
  font-size: 1.3rem;
  font-weight: 300;
  margin-bottom: 20px;
  opacity: 0.9;
  font-style: italic;
}

.profile-description {
  font-size: 1.1rem;
  line-height: 1.8;
  margin-bottom: 30px;
  opacity: 0.9;
}

.profile-stats {
  display: flex;
  gap: 30px;
  flex-wrap: wrap;
}

.profile-stats .stat-item {
  text-align: center;
}

.profile-stats .stat-number {
  font-size: 2.5rem;
  font-weight: 700;
  display: block;
  margin-bottom: 5px;
}

.profile-stats .stat-label {
  font-size: 0.9rem;
  opacity: 0.8;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* Visi Misi Section */
.visi-misi-section {
  background: #f8f9fa;
}

.section-header {
  margin-bottom: 50px;
}

.section-title {
  font-size: 2.5rem;
  font-weight: 700;
  color: #2c3e50;
  margin-bottom: 15px;
}

.section-subtitle {
  color: #6c757d;
  font-size: 1.1rem;
  max-width: 600px;
  margin: 0 auto;
}

.visi-card, .misi-card {
  background: white;
  border-radius: 20px;
  padding: 40px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.1);
  height: 100%;
  transition: transform 0.3s ease;
}

.visi-card:hover, .misi-card:hover {
  transform: translateY(-5px);
}

.card-icon {
  width: 80px;
  height: 80px;
  background: linear-gradient(135deg, #007bff, #0056b3);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 25px;
  font-size: 2rem;
  color: white;
  box-shadow: 0 5px 20px rgba(0,123,255,0.3);
}

.card-title {
  font-size: 1.8rem;
  font-weight: 600;
  color: #2c3e50;
  margin-bottom: 20px;
}

.card-description {
  font-size: 1.1rem;
  line-height: 1.8;
  color: #495057;
  margin-bottom: 25px;
}

.visi-pillars {
  display: flex;
  gap: 15px;
  flex-wrap: wrap;
}

.pillar-item {
  background: #f8f9fa;
  padding: 10px 15px;
  border-radius: 25px;
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 0.9rem;
  font-weight: 500;
  color: #495057;
  transition: transform 0.3s ease;
}

.pillar-item:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}



.misi-item {
  display: flex;
  align-items: flex-start;
  gap: 20px;
  padding: 20px;
  background: #f8f9fa;
  border-radius: 15px;
  transition: all 0.3s ease;
}

.misi-item:hover {
  background: #e9ecef;
  transform: translateX(5px);
}

.misi-icon {
  width: 50px;
  height: 50px;
  background: linear-gradient(135deg, #28a745, #20c997);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 1.2rem;
  flex-shrink: 0;
}

.misi-content p {
  margin: 0;
  color: #495057;
  line-height: 1.6;
}

/* Nilai Section */
.nilai-section {
  background: white;
}

.nilai-card {
  background: #f8f9fa;
  border-radius: 20px;
  padding: 30px;
  text-align: center;
  height: 100%;
  transition: all 0.3s ease;
  border: 2px solid transparent;
}

.nilai-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 40px rgba(0,0,0,0.1);
  border-color: #007bff;
}

.nilai-icon {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 20px;
  font-size: 2rem;
  color: white;
  box-shadow: 0 5px 20px rgba(0,0,0,0.2);
}

.nilai-title {
  font-size: 1.3rem;
  font-weight: 600;
  color: #2c3e50;
  margin-bottom: 15px;
}

.nilai-desc {
  color: #6c757d;
  line-height: 1.6;
  margin: 0;
}

/* Sejarah Section */
.sejarah-section {
  background: linear-gradient(135deg, #2c3e50, #34495e);
  color: white;
}

.sejarah-card {
  background: rgba(255,255,255,0.1);
  border-radius: 20px;
  padding: 40px;
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255,255,255,0.2);
}

.sejarah-icon {
  text-align: center;
  font-size: 5rem;
  color: rgba(255,255,255,0.8);
  margin-bottom: 20px;
}

.sejarah-title {
  font-size: 2rem;
  font-weight: 600;
  margin-bottom: 20px;
}

.sejarah-text {
  font-size: 1.1rem;
  line-height: 1.8;
  margin-bottom: 30px;
  opacity: 0.9;
}

.timeline-highlight {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
}

.timeline-item {
  background: rgba(255,255,255,0.1);
  padding: 15px 20px;
  border-radius: 10px;
  text-align: center;
  flex: 1;
  min-width: 120px;
  transition: transform 0.3s ease;
}

.timeline-item:hover {
  transform: translateY(-5px);
  background: rgba(255,255,255,0.2);
}

.timeline-item .year {
  display: block;
  font-size: 1.2rem;
  font-weight: 700;
  margin-bottom: 5px;
}

.timeline-item .event {
  font-size: 0.9rem;
  opacity: 0.8;
}

/* Responsive Design */
@media (max-width: 768px) {
  .profile-title {
    font-size: 2.2rem;
  }

  .profile-subtitle {
    font-size: 1.1rem;
  }

  .profile-stats {
    justify-content: center;
  }

  .profile-stats .stat-number {
    font-size: 2rem;
  }

  .section-title {
    font-size: 2rem;
  }

  .visi-card, .misi-card {
    padding: 30px 20px;
  }

  .timeline-highlight {
    flex-direction: column;
  }

  .sejarah-icon {
    font-size: 3rem;
  }
}
</style>

<!-- Required Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  // Initialize AOS
  AOS.init({
    duration: 1000,
    easing: 'ease-in-out',
    once: true,
    offset: 100
  });
</script>

@endsection
