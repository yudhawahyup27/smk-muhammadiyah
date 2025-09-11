<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') - SMK Muhammaddiyah Kediri</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
    <meta name="author" content="CodedThemes">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/dashboard/assets/images/favicon.svg') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('/dashboard/assets/fonts/tabler-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/dashboard/assets/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('/dashboard/assets/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/dashboard/assets/fonts/material.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('/dashboard/assets/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('/dashboard/assets/css/style-preset.css') }}">

    @stack('styles')
</head>
<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">

    <!-- Pre-loader -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    <!-- Sidebar -->
    @include('components.navigations.dashboard.sidebar')

    <!-- Navbar -->
    @include('components.navigations.dashboard.navbar')

    <!-- Main Content -->
    <div class="pc-container">
        <div class="pc-content">

            <!-- Breadcrumb -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Home</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Home</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page Content -->
            @yield('content')

        </div>
    </div>

    <!-- Footer -->
    @include('components.navigations.dashboard.footer')

    <!-- JS Scripts -->
    <script src="{{ asset('/dashboard/assets/js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/dashboard/assets/js/pages/dashboard-default.js') }}"></script>
    <script src="{{ asset('/dashboard/assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('/dashboard/assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('/dashboard/assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/dashboard/assets/js/fonts/custom-font.js') }}"></script>
    <script src="{{ asset('/dashboard/assets/js/pcoded.js') }}"></script>
    <script src="{{ asset('/dashboard/assets/js/plugins/feather.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <!-- Layout Configuration -->
    <script>layout_change('light');</script>
    <script>change_box_container('false');</script>
    <script>layout_rtl_change('false');</script>
    <script>preset_change("preset-1");</script>
    <script>font_change("Public-Sans");</script>

     <script>
    document.querySelectorAll('.description').forEach((el) => {
        ClassicEditor
            .create(el)
            .catch(error => {
                console.error(error);
            });
    });
</script>

    @stack('scripts')
</body>
</html>
