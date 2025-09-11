@extends('layouts.landing')

@section('content')
<div>
      <div class="page-title dark-background" style="background-image: url(assets/img/education/showcase-1.webp);">
  <div class="container position-relative">
    <h1>Jurusan</h1>
  </div>
      </div>

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
              <img src="{{ asset( $jur->gambar) }}" class="img-fluid rounded" alt="Program {{ $jur->nama }}">
              {{-- <img src="{{ asset('storage/' . $jur->gambar) }}" class="img-fluid rounded" alt="Program {{ $jur->nama }}"> --}}
            </div>
            <div class="flex-fill">
              <h3 class="mb-2">{{ $jur->nama }}</h3>
              <p class="mb-0 text-muted">{!! $jur->deskripsi !!}</p>
            </div>
          </div>
        </div>
        @endforeach
    </div>
  </div>
</section>
</div>
@endsection
