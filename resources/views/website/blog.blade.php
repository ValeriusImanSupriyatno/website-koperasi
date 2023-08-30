<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Blog - Company Bootstrap Template</title>
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
                <li><a href="{{url('tentang-kami')}}">Tentang Kami</a></li>
                <li><a href="{{url('/berita')}}" class="active">Berita</a></li>
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
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog" style="margin-top: 50px !important;">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry">

                        <div class="entry-img">
                            <img src="{{asset('assets/img/blog/blog-1.jpg')}}" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="{{url('/berita/1')}}">Koperasi Bersatu: Menuju Keberhasilan Bersama</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                        href="blog_single.blade.php">John Doe</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="blog_single.blade.php">
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                        href="blog_single.blade.php">12 Comments</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                Dalam upaya memajukan anggotanya, Koperasi Bersatu telah mengambil langkah signifikan
                                menuju kesejahteraan dan kesuksesan. Melalui semangat gotong royong dan kolaborasi,
                                koperasi ini telah berhasil menghadirkan peluang dan manfaat bagi anggotanya.
                            </p>
                            <div class="read-more">
                                <a href="{{url('/berita/1')}}">Baca Selengkapnya</a>
                            </div>
                        </div>

                    </article><!-- End blog entry -->

                    <article class="entry">

                        <div class="entry-img">
                            <img src="{{asset('assets/img/blog/blog-2.jpg')}}" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="blog_single.blade.php">Peran Koperasi Dalam Mendorong Pertumbuhan Ekonomi Lokal</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                        href="blog_single.blade.php">John Doe</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="blog_single.blade.php">
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                        href="blog_single.blade.php">12 Comments</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                Koperasi berperan besar dalam memajukan ekonomi lokal. Melalui bantuan pembiayaan,
                                pelatihan, dan akses pasar, koperasi memberikan dorongan bagi usaha kecil dan menengah.
                                Hasilnya, pertumbuhan ekonomi lokal meningkat, sambil juga memberikan dampak positif
                                sosial dan kesejahteraan komunitas.
                            </p>
                            <div class="read-more">
                                <a href="{{url('/berita/1')}}">Baca Selengkapnya</a>
                            </div>
                        </div>

                    </article><!-- End blog entry -->

                    <article class="entry">

                        <div class="entry-img">
                            <img src="{{asset('assets/img/blog/blog-3.jpg')}}" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="{{url('/berita/1')}}">Pemberdayaan Ekonomi Melalui Koperasi: Peluang dan
                                Keberlanjutan</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                        href="blog_single.blade.php">John Doe</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="blog_single.blade.php">
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                        href="blog_single.blade.php">12 Comments</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                Pemberdayaan ekonomi melalui koperasi menjadi langkah krusial dalam menghadapi tantangan
                                ekonomi saat ini. Dengan menawarkan solusi kreatif dan kolaboratif, koperasi mampu
                                memberikan akses terhadap pelatihan, sumber daya, dan modal yang diperlukan bagi
                                anggotanya. Dalam suasana di mana tantangan ekonomi semakin kompleks, model koperasi
                                menjadi sarana yang efektif untuk menghasilkan solusi berkelanjutan, membangun
                                kemandirian ekonomi, dan mendorong pertumbuhan usaha lokal.
                            </p>
                            <div class="read-more">
                                <a href="{{url('/berita/1')}}">Baca Selengkapnya</a>
                            </div>
                        </div>

                    </article><!-- End blog entry -->

                    <article class="entry">

                        <div class="entry-img">
                            <img src="{{asset('assets/img/blog/blog-4.jpg')}}" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="{{url('/berita/1')}}">Kolaborasi Sukses: Koperasi Memajukan Ekonomi Lokal</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                        href="blog_single.blade.php">John Doe</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="blog_single.blade.php">
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                        href="blog_single.blade.php">12 Comments</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                Kolaborasi yang sukses antar anggota koperasi telah membuktikan dampak positifnya dalam
                                memajukan ekonomi lokal. Dengan menghadirkan sumber daya yang terkumpul, koperasi mampu
                                mengatasi tantangan yang dihadapi oleh pelaku usaha kecil dan menengah. Dari memberikan
                                pelatihan hingga memudahkan akses ke pembiayaan, koperasi menjadi motor penggerak
                                pertumbuhan ekonomi lokal yang berkelanjutan.
                            </p>
                            <div class="read-more">
                                <a href="{{url('/berita/1')}}">Baca Selengkapnya</a>
                            </div>
                        </div>

                    </article><!-- End blog entry -->

                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <li><a href="#">General <span>(25)</span></a></li>
                                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                                <li><a href="#">Travel <span>(5)</span></a></li>
                                <li><a href="#">Design <span>(22)</span></a></li>
                                <li><a href="#">Creative <span>(8)</span></a></li>
                                <li><a href="#">Educaion <span>(14)</span></a></li>
                            </ul>
                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Berita Terbaru</h3>
                        <div class="sidebar-item recent-posts">
                            <div class="post-item clearfix">
                                <img src="{{asset('assets/img/blog/blog-recent-1.jpg')}}" alt="">
                                <h4><a href="blog_single.blade.php">Transparansi dan Kejujuran: Pilar Utama Koperasi
                                        Bersatu</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="{{asset('assets/img/blog/blog-recent-2.jpg')}}" alt="">
                                <h4><a href="blog_single.blade.php">Inovasi dalam Pelayanan: Kunci Kemajuan Koperasi
                                        Maju Jaya</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="{{asset('assets/img/blog/blog-recent-3.jpg')}}" alt="">
                                <h4><a href="blog_single.blade.php">Berdaya Bersama: Koperasi Sejahtera Mewujudkan
                                        Potensi Anggota</a>
                                </h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                        </div><!-- End sidebar recent posts-->

                        <h3 class="sidebar-title">Tags</h3>
                        <div class="sidebar-item tags">
                            <ul>
                                <li><a href="#">App</a></li>
                                <li><a href="#">IT</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Mac</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Studio</a></li>
                                <li><a href="#">Smart</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div><!-- End sidebar tags-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Section -->

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
