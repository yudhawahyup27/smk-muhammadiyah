<footer id="footer" class="footer position-relative dark-background">
  <div class="container footer-top">
    <div class="row gy-4 align-items-center justify-content-between">

      <!-- Bagian Kiri: Logo & Deskripsi -->
      <div class="col-lg-auto col-md-6 footer-about">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
          <span class="sitename">{{ $profile->name ?? 'SMK Muhammadiyah' }}</span>
        </a>
        <p>{{ $profile->slogan ?? 'Sekolah Kejuruan Unggulan di Ngadiluwih' }}</p>
      </div>

      <!-- Menu Navigasi -->
      <div class="col-lg-auto col-md-3 footer-links">
        <h4>Menu</h4>
        <ul>
          <li><a href="{{ url('/') }}">Beranda</a></li>
          <li><a href="#profile">Profile</a></li>
          <li><a href="#jurusan">Jurusan</a></li>
          <li><a href="#fasilitas">Fasilitas Sekolah</a></li>
          <li><a href="#ekskul">Ekstrakurikuler</a></li>
        </ul>
      </div>

      <!-- Kontak & Sosial Media -->
      <div class="col-lg-auto col-md-3 footer-links">
        <div class="footer-contact pt-3">
          <p>{{!! $profile->alamat ?? 'Alamat belum tersedia' }}</p>
          <p class="mt-3"><strong>Whatsapp:</strong> <span>{{ $profile->telepon ?? '-' }}</span></p>
          <p><strong>Email:</strong> <span>{{ $profile->email ?? '-' }}</span></p>
        </div>
        <div class="social-links d-flex mt-4">
          @if ($profile->telepon)
            <a href="https://wa.me/{{ $profile->telepon }}" target="_blank"><i class="bi bi-whatsapp"></i></a>
          @endif
          @if ($profile->web)
            <a href="{{ $profile->web }}" target="_blank"><i class="bi bi-globe"></i></a>
          @endif
          @if ($profile->instagram)
            <a href="https://instagram.com/{{ $profile->instagram }}" target="_blank"><i class="bi bi-instagram"></i></a>
          @endif
        </div>
      </div>

    </div>
  </div>

  <!-- Copyright -->
  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright <script>document.write(new Date().getFullYear())</script>,</span>
      <strong class="px-1 sitename">{{ $profile->name ?? 'SMK Muhammadiyah Ngadiluwih Kediri' }}</strong>
      <span>All Rights Reserved</span>
    </p>
    <div class="credits">
      Design & Development by <a href="https://pondoktech.com" target="_blank">Pondoktech.com</a>
    </div>
  </div>
</footer>
