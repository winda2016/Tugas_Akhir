<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>Teduh Hair Studio - Admin</title>
    <link href="{!! asset('backend/vendor/fontawesome-free/css/all.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('backend/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('backend/css/ruang-admin.min.css') !!}" rel="stylesheet">
    <style>
        /* .fixed-top{
            z-index: -1;
        } */
        .sidebar-brand-text{
            z-index: 1000;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        @include('backend.layouts.sidebar')
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                @include('backend.layouts.header')
                <!-- Topbar -->

                <!-- Container Fluid-->
                <div class="container">
                    @yield('container')
                </div>
                <!---Container Fluid-->
            </div>
            <!-- Footer -->
           @include('backend.layouts.footer')
            <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="{!! asset('backend/vendor/jquery/jquery.min.js') !!}"></script>
    <script src="{!! asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! asset('backend/vendor/jquery-easing/jquery.easing.min.js') !!}"></script>
    <script src="{!! asset('backend/js/ruang-admin.min.js') !!}"></script>
    <script src="{!! asset('backend/vendor/chart.js/Chart.min.js') !!}"></script>
    <script src="{!! asset('backend/js/demo/chart-area-demo.js') !!}"></script>
</body>

</html>
