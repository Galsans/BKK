<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Knight Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Knight
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <a href="index.html" class="hero-logo" data-aos="zoom-in"><img
                    src="{{ asset('frontend/assets/img/logo1.png') }}" alt=""></a>
            <h1 data-aos="zoom-in">Welcome To BKK Website</h1>
            <h2 data-aos="fade-up">We are team of talented designers making websites with Bootstrap</h2>
            <a data-aos="fade-up" data-aos-delay="200" href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section><!-- End Hero -->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <a href="index.html"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt=""
                        class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
                    <li><a class="nav-link scrollto" href="#services">Tujuan</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Lowongan</a></li>
                    <li><a class="nav-link scrollto" href="#faq">Pendaftaran</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Tentang Kami</h2>
                    {{-- <p>Magnam dolores commodi suscipit eius consequatur</p> --}}
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="image">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3ZiqTGwe6kFxvu1BoSwHglWvudQvFOgV8xg&usqp=CAU"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                            <h4>Bursa Kerja Khusus (BKK) adalah sebuah lembaga yang dibentuk di Sekolah Menengah
                                Kejuruan Negeri dan Swasta, sebagai unit pelaksana yang memberikan pelayanan dan
                                informasi lowongan kerja, pelaksana pemasaran, penyaluran dan penempatan tenaga kerja,
                                merupakan mitra Dinas Tenaga Kerja dan Transmigrasi.
                            </h4>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Tujuan</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                            <i class="bx bx-receipt"></i>
                            {{-- <h4>Est labore ad</h4> --}}
                            <h5>Sebagai wadah dalam mempertemukan tamatan dengan pencari kerja.
                            </h5>
                        </div>
                        <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-cube-alt"></i>
                            {{-- <h4>Harum esse qui</h4> --}}
                            <h5>Memberikan layanan kepada tamatan sesuai dengan tugas dan fungsi masing-masing seksi
                                yang
                                ada dalam BKK.</h5>
                        </div>
                        <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-images"></i>
                            {{-- <h4>Aut occaecati</h4> --}}
                            <h5>Sebagai wadah dalam pelatihan tamatan yang sesuai dengan permintaan pencari kerja
                            </h5>
                        </div>
                        <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-shield"></i>
                            {{-- <h4>Beatae veritatis</h4> --}}
                            <h5>Sebagai wadah untuk menanamkan jiwa wirausaha bagi tamatan melalui pelatihan.
                            </h5>
                        </div>
                    </div>
                    <div class="image col-lg-6 order-1 order-lg-2"
                        style='background-image: url("{{ asset('frontend/assets/img/services.jpg') }}"); '
                        data-aos="fade-left" data-aos-delay="100"></div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Perusahaan</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel debitis officia labore aperiam
                        totam! Aspernatur?</p>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Perusahaan 1</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo dolor, voluptatum
                                    quos eveniet quisquam hic libero. Illum animi molestias assumenda.</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('frontend/assets/img/portfolio/portfolio-1.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Perusahaan 2</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo dolor, voluptatum
                                    quos eveniet quisquam hic libero. Illum animi molestias assumenda.</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('frontend/assets/img/portfolio/portfolio-2.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Perusahaan 3</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo dolor, voluptatum
                                    quos eveniet quisquam hic libero. Illum animi molestias assumenda.</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('frontend/assets/img/portfolio/portfolio-3.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>TATA CARA</h2>
                    <p>Tata Cara Pendaftaran</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class='bx bxs-edit-alt'></i></div>
                            <h4 class="title"><a href="">Tulis Pendaftaran</a></h4>
                            <p class="description">Tulis Pendaftaran Sesuai Kriteria Anda.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-shuffle"></i></div>
                            <h4 class="title"><a href="">Proses Verifikasi</a></h4>
                            <p class="description">Tunggu sampai laporan Anda di verifikasi oleh admin/petugas.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Tindak Lanjut</a></h4>
                            <p class="description">Pendaftaran Anda sedang dalam diproses dan ditindak lanjut.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class='bx bx-check-shield'></i></div>
                            <h4 class="title"><a href="">Selesai</a></h4>
                            <p class="description">Hasil Akan Dikirm Lewat Email</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Cta Section ======= -->
        <section class="cta">
            <div class="container">
                <div class="text-center">
                    <h3 class="text-white">Call To Action</h3>
                    <p class="text-white">Dibawah Adalah Button Pendaftaran Silahkan Isi sesuai dengan Kriteria Anda
                    </p>
                    <!-- Button trigger modal -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Daftar Sekarang
                    </button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pendaftaran</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="form-group mt-3">
                                        {{-- <label for="">Nama</label> --}}
                                        <input type="text" name="name" placeholder="Nama" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group mt-3">
                                        {{-- <label for="">Email</label> --}}
                                        <input type="email" name="email" placeholder="Email"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        {{-- <label for="">Laporan</label> --}}
                                        {{-- <input type="text" name="dkr"
                                                placeholder="masukkan deskripsi kejadian..." class="form-control" required> --}}
                                        <textarea name="dkr" placeholder="Deskripsi Kejadian" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="">Bukti Foto/Gambar Kejadian</label>
                                        <input type="file" name="img" class="form-control"
                                            placeholder="Bukti Laporan" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="">Tanggal Kejadian</label>
                                        <input type="date" name="date"
                                            placeholder="masukkan tanggal kejadian..." class="form-control" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-primary" type="submit">SEND</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="" class="btn btn-warning text-dark">Pengumuman Dan Hasil Seleksi</a>
            </div>
        </section><!-- End Cta Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, veritatis.</p>
                </div>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Jl Merdeka,<br>Jakarta Pusat, Jakarta 221987</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+62 8812 55488 559</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="" method="post" class="php-email-form" data-aos="fade-left">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <a href="#header" class="scrollto footer-logo"><img
                                src="{{ asset('frontend/assets/img/hero-logo.png') }}" alt=""></a>
                        <h3>BKK Sekolah</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia ipsa ducimus quam et
                            reiciendis qui!</p>
                    </div>
                </div>


                <div class="social-links">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                </div>

            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Galih Hendra</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
