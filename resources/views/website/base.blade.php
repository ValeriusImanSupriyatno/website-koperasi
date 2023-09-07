<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Company Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Company
    * Updated: Jul 27 2023 with Bootstrap v5.3.1
    * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{url('/beranda')}}"><span
                    style="font-size: 24px;">Koperasi Konsumen-MBS</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.blade.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a href="{{url('/beranda')}}" class="{{$path ==='beranda' ? 'active' : ''}}">Beranda</a></li>
                <li><a href="{{url('/tentang-kami')}}" class="{{$path ==='tentang-kami' ? 'active' : ''}}">Tentang
                        Kami</a>
                </li>
{{--                <li><a href="{{url('/berita')}}">Berita</a></li>--}}

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="header-social-links d-flex">
            {{--            <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>--}}
            <a href="https://m.facebook.com/profile.php?id=61550068106210&mibextid=ZbWKwL" class="facebook"><i
                    class="bu bi-facebook"></i></a>
            <a href="https://instagram.com/kkmbs2023?igshid=NTc4MTIwNjQ2YQ==" class="instagram"><i
                    class="bu bi-instagram"></i></a>
            <a href="https://wa.me/6281267034148" class="whatsapp"><i class="bu bi-whatsapp"></i></a>
        </div>

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
@yield('section')
<!-- End Hero -->

<main id="main">

    @yield('main')

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 footer-contact">
                    <h3>Koperasi Konsumen-MBS</h3>
                    <p>
                        Nagari Sidodadi, Kec. Kinali, Kab. Pasaman Barat,<br>
                        Prov. Sumatera Barat <br>
                        Indonesia<br>
                        <br>
                        <strong>HP / WA:</strong> 0812 6703 4148<br>
                    </p>
                </div>

                <div class="col-lg-6 col-md-6 footer-links">
                    <h4>Tautan</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{url('/beranda')}}">Beranda</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{url('/tentang-kami')}}">Tentang Kami</a></li>
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="{{url('/berita')}}">Berita</a></li>--}}
                        {{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak</a></li>--}}
                    </ul>
                </div>

                {{--                <div class="col-lg-4 col-md-6 footer-newsletter">--}}
                {{--                    <h4>Join Our Newsletter</h4>--}}
                {{--                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>--}}
                {{--                    <form action="" method="post">--}}
                {{--                        <input type="email" name="email"><input type="submit" value="Subscribe">--}}
                {{--                    </form>--}}
                {{--                </div>--}}

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>Koperasi Konsumen Maju Bersama Sidodadi [ KK-MBS]</span></strong>.
            </div>
{{--            <div class="credits">--}}
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
{{--                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>--}}
{{--            </div>--}}
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="https://m.facebook.com/profile.php?id=61550068106210&mibextid=ZbWKwL" class="facebook"><i
                    class="bu bi-facebook"></i></a>
            <a href="https://instagram.com/kkmbs2023?igshid=NTc4MTIwNjQ2YQ==" class="instagram"><i
                    class="bu bi-instagram"></i></a>
            <a href="https://wa.me/6281267034148" class="whatsapp"><i class="bu bi-whatsapp"></i></a>
        </div>
    </div>
</footer>
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
