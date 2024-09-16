<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon-two.png')}}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css')}}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css')}}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">
    <!-- line awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">

</head>

<body>
    <!--==================== Preloader Start ====================-->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--==================== Preloader End ====================-->

    <!--==================== Overlay Start ====================-->
    <div class="overlay"></div>
    <!--==================== Overlay End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- ==================== Scroll to Top End Here ==================== -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- ==================== Scroll to Top End Here ==================== -->
    @include('components.navbar')
    <main class="change-gradient">
        @yield('content')



        @include('components.footer')
    </main>

    <!-- Jquery js -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js')}}"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('assets/js/boostrap.bundle.min.js')}}"></script>
    <!-- CountDown -->
    <script src="{{ asset('assets/js/countdown.js')}}"></script>
    <!-- counter up -->
    <script src="{{ asset('assets/js/counterup.min.js')}}"></script>
    <!-- Slick js -->
    <script src="{{ asset('assets/js/slick.min.js')}}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.js')}}"></script>
    <!-- apex chart -->
    <script src="{{ asset('assets/js/apexchart.js')}}"></script>
    <!-- marquee -->
    <script src="{{ asset('assets/js/marquee.min.js')}}"></script>

    <!-- main js -->
    <script src="{{ asset('assets/js/main.js')}}"></script>

</body>

</html>
