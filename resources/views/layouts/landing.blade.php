<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>SMK Muhammadiyah Ngadiluwih | @yield('title')</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <!-- Favicon -->
  <link href="{{ asset('/assets/img/favicon.png') }}" rel="icon" />
  <link href="{{ asset('/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700;900&family=Poppins:wght@100;400;700;900&family=Raleway:wght@100;400;700;900&display=swap" rel="stylesheet" />

  <!-- Vendor CSS -->
  <link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('/assets/vendor/aos/aos.css') }}" rel="stylesheet" />
  <link href="{{ asset('/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />

  <!-- Main CSS -->
  <link href="{{ asset('/assets/css/main.css') }}" rel="stylesheet" />
</head>

<body class="index-page">

  {{-- Navbar --}}
  @include('components.navigations.landing.navbar')

  {{-- Page Content --}}
  <main class="main">
    @yield('content')
  </main>

  {{-- Footer --}}
  @include('components.navigations.landing.footer')

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS -->
  <script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

  <!-- Main JS -->
  <script src="{{ asset('/assets/js/main.js') }}"></script>
</body>

</html>
