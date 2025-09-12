@extends('layouts.landing')

@section('title','Alumni')
@section('content')
<div class="page-title dark-background" style="background-image: url(assets/img/education/showcase-1.webp);">
  <div class="container position-relative">
    <h1>Alumni</h1>

  </div>
</div>

<!-- Alumni Section -->
<section id="alumni" class="alumni section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="alumni-hero">
      <div class="row align-items-center">
        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
          <div class="hero-content">
            <span class="alumni-badge">Alumni Community</span>
            <h2>Ikut Menjadi Bagian Alumni Kami</h2>
            <div class="alumni-metrics">
              <div class="metric">
                <div class="counter">{{ number_format($totalLulus) }}</div>
                <div class="label">Telah Meluluskan</div>
              </div>
              <div class="metric">
                <div class="counter">{{ number_format($totalKuliah) }}</div>
                <div class="label">BerKuliah</div>
              </div>
              <div class="metric">
                <div class="counter">{{ number_format($totalKerja) }}</div>
                <div class="label">bekerja</div>
              </div>
            </div>
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

    {{-- Filter --}}
    <form method="GET" class="row g-3 my-4">
      <div class="col-md-3">
        <select name="angkatan" class="form-control">
          <option value="">Pilih Angkatan</option>
          @foreach(range(date('Y'), date('Y') - 10) as $year)
            <option value="{{ $year }}" {{ request('angkatan') == $year ? 'selected' : '' }}>{{ $year }}</option>
          @endforeach
        </select>
      </div>
      <div class="col-md-3">
        <select name="tahun_lulus" class="form-control">
          <option value="">Tahun Lulus</option>
          @foreach(range(date('Y'), date('Y') - 10) as $year)
            <option value="{{ $year }}" {{ request('tahun_lulus') == $year ? 'selected' : '' }}>{{ $year }}</option>
          @endforeach
        </select>
      </div>
      <div class="col-md-3">
        <select name="status" class="form-control">
          <option value="">Status</option>
          <option value="Kuliah" {{ request('status') == 'Kuliah' ? 'selected' : '' }}>Kuliah</option>
          <option value="Kerja" {{ request('status') == 'Kerja' ? 'selected' : '' }}>Kerja</option>
        </select>
      </div>
      <div class="col-md-3">
        <button type="submit" class="btn btn-primary w-100">Filter</button>
      </div>
    </form>

    {{-- Notable Alumni --}}
    <div class="notable-alumni">
      <div class="section-header text-center" data-aos="fade-up" data-aos-delay="200">
        <h3>Notable Alumni Spotlights</h3>
        <p>Extraordinary graduates making an impact in their fields</p>
      </div>

      <div class="row">
        @forelse ($alumni as $a)
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="alumni-profile">
            <div class="profile-header">
              <div class="profile-img">


                <img src="{{ asset('storage/app/public/' . $a->photo) }}" alt="{{ $a->name }}" class="img-fluid">

                {{-- <img src="{{ asset('storage/app/public/' .'storage/app/public/' . $a->photo) }}" alt="{{ $a->name }}" class="img-fluid"> --}}
              </div>
              <div class="profile-year">{{ $a->tahun_lulus }}</div>
            </div>
            <div class="profile-body">
              <h4>{{ $a->name }}</h4>
              <span class="profile-title">{{ $a->status }} - {{ $a->tempat }}</span>
              <p class="text-capitalize">{!! $a->caption !!}</p>

            </div>
          </div>
        </div>
        @empty
        <div class="col-12 text-center">
          <p class="text-muted">Data alumni tidak ditemukan.</p>
        </div>
        @endforelse
      </div>

      {{-- Tombol atau pagination opsional --}}
      {{-- <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="600">
        <a href="#" class="btn-explore">Explore More Alumni Stories</a>
      </div> --}}

    </div>

  </div>
</section><!-- /Alumni Section -->
@endsection
