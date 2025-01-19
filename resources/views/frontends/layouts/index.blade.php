<!doctype html>
<html lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SD KARTINI II</title>

    <link rel="shortcut icon" href="{{ asset('frontends/logo_sdk.png') }}" type="images/x-icon" />

    <!-- css include -->
    <link rel="stylesheet" href="{{ asset('frontends/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontends/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontends/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontends/assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontends/assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('frontends/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontends/assets/css/recoleta-font.css') }}">
    <link rel="stylesheet" href="{{ asset('frontends/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontends/assets/css/main.css') }}">
</head>

<body>

    <!-- backtotop - start -->
    <div class="xb-backtotop">
        <a href="#" class="scroll">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->

    <!-- Preloader - Start -->
    {{-- <div id="preloader">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="{{ asset('frontends/logo_sdk.png') }}" alt="preloader"></div>
            </div>
        </div>
    </div> --}}
    <!-- Preloader - End -->

    <div class="body_wrap">

        <!-- header start -->
        @include('frontends.layouts.header')
        <!-- header end -->

        <!-- header search start -->
        {{-- <div class="header-search-form-wrapper">
            <div class="xb-search-close xb-close"></div>
            <div class="header-search-container">
                <form role="search" class="search-form" action="#">
                    <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                    <button type="submit" class="search-submit"><i class="far fa-search"></i></button>
                </form>
            </div>
        </div> --}}
        <div class="body-overlay"></div>
        <!-- header search end -->

        <!-- main area start  -->
        @yield('content')
        <!-- main area end  -->

        <!-- footer strt -->
        {{-- <footer class="footer bg_img pos-rel pt-20"
            data-background="{{ asset('frontends/assets/img/bg/footer-bg.jpg') }}"> --}}
           @include('frontends.layouts.footer')
            <!-- footer end -->

    </div>

    <!-- jquery include -->
    <script src="{{ asset('frontends/assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontends/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontends/assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('frontends/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontends/assets/js/appear.js') }}"></script>
    <script src="{{ asset('frontends/assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('frontends/assets/js/countdown.js') }}"></script>
    <script src="{{ asset('frontends/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontends/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontends/assets/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('frontends/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontends/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontends/assets/js/main.js') }}"></script>

</body>

</html>