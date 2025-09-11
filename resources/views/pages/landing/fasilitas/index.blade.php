@extends('layouts.landing')

@section('content')
<div>
       <div class="page-title dark-background" style="background-image: url(assets/img/education/showcase-1.webp);">
  <div class="container position-relative">
    <h1>Fasilitas</h1>
  </div>
      </div>

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
                                <img src="{{ asset($item->gambar) }}" alt="Gambar" class="img-thumbnail"  />
                                {{-- <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar" class="img-thumbnail"  /> --}}
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
</div>
@endsection
