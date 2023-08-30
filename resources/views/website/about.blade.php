<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>About - Company Bootstrap Template</title>
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

        <h1 class="logo me-auto"><a href="{{url('/beranda')}}"><span>Koperasi</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.blade.php" class="logo me-auto me-lg-0"><img src="assetsa/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a href="{{url('/beranda')}}">Beranda</a></li>
                <li><a href="{{url('tentang-kami')}}" class="active">Tentang Kami</a></li>
                <li><a href="{{url('/berita')}}">Berita</a></li>
                {{--                <li><a href="contact.blade.php">Kontak</a></li>--}}

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="header-social-links d-flex">
            <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></a>
        </div>

    </div>
</header><!-- End Header -->

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us" style="margin-top: 50px !important;">
        <div class="container" data-aos="fade-up">

            <div class="row content">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2>Kolaborasi Menuju Kemajuan</h2>
                    <h3>Kami di koperasi ini percaya bahwa dengan bekerja bersama-sama, kita dapat mencapai kemajuan
                        yang luar biasa. Setiap anggota adalah bagian penting dari fondasi kesuksesan, dan kami
                        berkomitmen untuk menyediakan lingkungan yang mendukung serta peluang yang adil bagi semua.</h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                    <p>
                        Kolaborasi Membentuk Koperasi yang Kuat
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i>
                            Melalui kerjasama yang sinergis, kami menjalankan koperasi ini dengan sepenuh hati dan penuh
                            dedikasi.
                        </li>
                        <li><i class="ri-check-double-line"></i>
                            Setiap langkah yang diambil adalah langkah menuju kesuksesan yang lebih besar.
                        </li>
                        <li><i class="ri-check-double-line"></i> Kami percaya bahwa kerja keras dan tekad akan
                            menghasilkan prestasi luar biasa.
                        </li>
                    </ul>
                    <p class="fst-italic">
                        Kami berkomitmen untuk memberikan layanan terbaik kepada anggota kami. Dengan semangat penuh,
                        kami mengambil inspirasi dari nilai-nilai koperasi untuk menciptakan lingkungan yang inklusif
                        dan bermanfaat bagi semua.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>TIM <strong>KAMI</strong></h2>
                <p>Kerja Bersama, Sukses Sama-sama. Kami adalah tim yang terdiri dari individu yang berdedikasi tinggi
                    untuk melayani anggota koperasi. Setiap langkah yang kami ambil didasarkan pada semangat kebersamaan
                    dan tujuan bersama untuk mencapai kesuksesan bersama. Kami percaya bahwa dengan kerja keras dan
                    komitmen, kita dapat mengatasi setiap tantangan dan meraih prestasi luar biasa.</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{asset('assets/img/team/team-2.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{asset('assets/img/team/team-3.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="{{asset('assets/img/team/team-4.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Mitra</h2>
            </div>

            <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{asset('assets/img/clients/client-1.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{asset('assets/img/clients/client-2.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{asset('assets/img/clients/client-3.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{asset('assets/img/clients/client-4.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{asset('assets/img/clients/client-5.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{asset('assets/img/clients/client-6.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{asset('assets/img/clients/client-7.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{asset('assets/img/clients/client-8.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Our Clients Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-contact">
                    <h3>Koperasi Maju Bersama</h3>
                    <p>
                        Sidodadi, Kec. Kinali, Kab. Pasaman Barat,<br>
                        Prov. Sumatera Barat <br>
                        Indonesia<br>
                        <br>
                        <strong>Telp:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Berita</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak</a></li>
                    </ul>
                </div>

                {{--                <div class="col-lg-3 col-md-6 footer-links">--}}
                {{--                    <h4>Our Services</h4>--}}
                {{--                    <ul>--}}
                {{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>--}}
                {{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>--}}
                {{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>--}}
                {{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>--}}
                {{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Join Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>Company</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
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
